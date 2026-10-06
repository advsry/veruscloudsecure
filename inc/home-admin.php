<?php
/**
 * Tiny homepage editor. Bypasses post.php so leftover builder HTML cannot
 * trigger HTTP 413 Request Entity Too Large.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Front page post ID, or 0.
 *
 * @return int
 */
function verus_front_page_id() {
	if ( 'page' !== get_option( 'show_on_front' ) ) {
		return 0;
	}
	return (int) get_option( 'page_on_front' );
}

/**
 * Register Pages → Homepage cards.
 */
function verus_homepage_admin_menu() {
	add_submenu_page(
		'edit.php?post_type=page',
		__( 'Homepage cards', 'verus' ),
		__( 'Homepage cards', 'verus' ),
		'edit_pages',
		'verus-homepage',
		'verus_homepage_admin_render'
	);
}
add_action( 'admin_menu', 'verus_homepage_admin_menu' );

/**
 * Send the homepage page-editor to the small form.
 */
function verus_redirect_front_page_editor() {
	if ( empty( $_GET['post'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		return;
	}
	$id    = (int) $_GET['post']; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	$front = verus_front_page_id();
	if ( ! $front || $id !== $front ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $id ) ) {
		return;
	}
	wp_safe_redirect( admin_url( 'admin.php?page=verus-homepage' ) );
	exit;
}
add_action( 'load-post.php', 'verus_redirect_front_page_editor', 0 );

/**
 * Save homepage card fields.
 */
function verus_homepage_admin_save() {
	if ( ! current_user_can( 'edit_pages' ) ) {
		wp_die( esc_html__( 'Sorry, you are not allowed to edit this.', 'verus' ) );
	}
	check_admin_referer( 'verus_save_homepage' );

	$front = verus_front_page_id();
	if ( ! $front ) {
		wp_safe_redirect( admin_url( 'admin.php?page=verus-homepage&verus_err=nofront' ) );
		exit;
	}

	$scalars = array( 'pillars_eyebrow', 'pillars_title', 'pillars_lede' );
	foreach ( $scalars as $name ) {
		$raw = isset( $_POST[ $name ] ) ? wp_unslash( $_POST[ $name ] ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing
		verus_homepage_store_field( $name, sanitize_textarea_field( $raw ), $front );
	}

	$icons = array( 'ai', 'lock', 'headset', 'database', 'shield', 'cloud', 'bolt', 'users', 'star' );
	for ( $i = 1; $i <= 4; $i++ ) {
		$title = isset( $_POST[ "pillar_{$i}_title" ] ) ? sanitize_text_field( wp_unslash( $_POST[ "pillar_{$i}_title" ] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing
		$text  = isset( $_POST[ "pillar_{$i}_text" ] ) ? sanitize_textarea_field( wp_unslash( $_POST[ "pillar_{$i}_text" ] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing
		$url = isset( $_POST[ "pillar_{$i}_url" ] ) ? sanitize_text_field( wp_unslash( $_POST[ "pillar_{$i}_url" ] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing
		$icon = isset( $_POST[ "pillar_{$i}_icon" ] ) ? sanitize_key( wp_unslash( $_POST[ "pillar_{$i}_icon" ] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing
		if ( ! in_array( $icon, $icons, true ) ) {
			$icon = '';
		}
		verus_homepage_store_field( "pillar_{$i}_title", $title, $front );
		verus_homepage_store_field( "pillar_{$i}_text", $text, $front );
		verus_homepage_store_field( "pillar_{$i}_url", $url, $front );
		verus_homepage_store_field( "pillar_{$i}_icon", $icon, $front );
	}

	wp_safe_redirect( admin_url( 'admin.php?page=verus-homepage&verus_saved=1' ) );
	exit;
}
add_action( 'admin_post_verus_save_homepage', 'verus_homepage_admin_save' );

/**
 * Write one homepage field via ACF when possible.
 *
 * @param string $name    Field name.
 * @param string $value   Value.
 * @param int    $post_id Page ID.
 */
function verus_homepage_store_field( $name, $value, $post_id ) {
	if ( function_exists( 'update_field' ) ) {
		update_field( $name, $value, $post_id );
		return;
	}
	update_post_meta( $post_id, $name, $value );
}

/**
 * Read one homepage field.
 *
 * @param string $name    Field name.
 * @param int    $post_id Page ID.
 * @return string
 */
function verus_homepage_read_field( $name, $post_id ) {
	if ( function_exists( 'get_field' ) ) {
		$val = get_field( $name, $post_id );
		if ( is_string( $val ) || is_numeric( $val ) ) {
			return (string) $val;
		}
	}
	return (string) get_post_meta( $post_id, $name, true );
}

/**
 * Render the small homepage form.
 */
function verus_homepage_admin_render() {
	if ( ! current_user_can( 'edit_pages' ) ) {
		wp_die( esc_html__( 'Sorry, you are not allowed to edit this.', 'verus' ) );
	}

	$front = verus_front_page_id();
	$d     = verus_defaults( 'home' );
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Homepage cards', 'verus' ); ?></h1>
		<p><?php esc_html_e( 'This screen saves only the Our Solutions cards. It avoids the page editor, which was sending leftover page-builder HTML and hitting a 413 Request Entity Too Large error.', 'verus' ); ?></p>

		<?php if ( isset( $_GET['verus_saved'] ) ) : // phpcs:ignore WordPress.Security.NonceVerification.Recommended ?>
			<div class="notice notice-success is-dismissible"><p><?php esc_html_e( 'Saved. Refresh the live homepage (and purge cache) to see the cards.', 'verus' ); ?></p></div>
		<?php endif; ?>

		<?php if ( ! $front ) : ?>
			<div class="notice notice-error"><p><?php esc_html_e( 'Set Settings → Reading to a static homepage first.', 'verus' ); ?></p></div>
		<?php else : ?>
			<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" style="max-width:760px">
				<?php wp_nonce_field( 'verus_save_homepage' ); ?>
				<input type="hidden" name="action" value="verus_save_homepage">

				<h2><?php esc_html_e( 'Section heading', 'verus' ); ?></h2>
				<p>
					<label><?php esc_html_e( 'Eyebrow', 'verus' ); ?><br>
					<input class="large-text" type="text" name="pillars_eyebrow" value="<?php echo esc_attr( verus_homepage_read_field( 'pillars_eyebrow', $front ) ); ?>" placeholder="<?php echo esc_attr( $d['pillars_eyebrow'] ); ?>">
					</label>
				</p>
				<p>
					<label><?php esc_html_e( 'Heading', 'verus' ); ?><br>
					<input class="large-text" type="text" name="pillars_title" value="<?php echo esc_attr( verus_homepage_read_field( 'pillars_title', $front ) ); ?>" placeholder="<?php echo esc_attr( $d['pillars_title'] ); ?>">
					</label>
				</p>
				<p>
					<label><?php esc_html_e( 'Lede (short intro under the heading)', 'verus' ); ?><br>
					<textarea class="large-text" rows="3" name="pillars_lede" placeholder="<?php echo esc_attr( $d['pillars_lede'] ); ?>"><?php echo esc_textarea( verus_homepage_read_field( 'pillars_lede', $front ) ); ?></textarea>
					</label>
				</p>

				<?php
				$icon_choices = array(
					'ai'       => 'AI',
					'lock'     => 'Lock',
					'headset'  => 'Headset',
					'database' => 'Database',
					'shield'   => 'Shield',
					'cloud'    => 'Cloud',
					'bolt'     => 'Bolt',
					'users'    => 'Users',
					'star'     => 'Star',
				);
				for ( $i = 1; $i <= 4; $i++ ) :
					$def   = isset( $d['pillars'][ $i - 1 ] ) ? $d['pillars'][ $i - 1 ] : array( 'title' => '', 'text' => '', 'url' => '', 'icon' => '' );
					$title = verus_homepage_read_field( "pillar_{$i}_title", $front );
					$text  = verus_homepage_read_field( "pillar_{$i}_text", $front );
					$url   = verus_homepage_read_field( "pillar_{$i}_url", $front );
					$icon  = verus_homepage_read_field( "pillar_{$i}_icon", $front );
					?>
					<hr>
					<h2><?php echo esc_html( sprintf( __( 'Pillar %d', 'verus' ), $i ) ); ?></h2>
					<p>
						<label><?php esc_html_e( 'Title', 'verus' ); ?><br>
						<input class="large-text" type="text" name="pillar_<?php echo (int) $i; ?>_title" value="<?php echo esc_attr( $title ); ?>" placeholder="<?php echo esc_attr( $def['title'] ); ?>">
						</label>
					</p>
					<p>
						<label><?php esc_html_e( 'Text', 'verus' ); ?><br>
						<textarea class="large-text" rows="3" name="pillar_<?php echo (int) $i; ?>_text" placeholder="<?php echo esc_attr( $def['text'] ); ?>"><?php echo esc_textarea( $text ); ?></textarea>
						</label>
					</p>
					<p>
						<label><?php esc_html_e( 'URL (site path like /ai-services/ is fine)', 'verus' ); ?><br>
						<input class="large-text" type="text" name="pillar_<?php echo (int) $i; ?>_url" value="<?php echo esc_attr( $url ); ?>" placeholder="<?php echo esc_attr( $def['url'] ); ?>">
						</label>
					</p>
					<p>
						<label><?php esc_html_e( 'Icon', 'verus' ); ?><br>
						<select name="pillar_<?php echo (int) $i; ?>_icon">
							<option value=""><?php esc_html_e( 'Default', 'verus' ); ?></option>
							<?php foreach ( $icon_choices as $key => $label ) : ?>
								<option value="<?php echo esc_attr( $key ); ?>"<?php selected( $icon, $key ); ?>><?php echo esc_html( $label ); ?></option>
							<?php endforeach; ?>
						</select>
						</label>
					</p>
				<?php endfor; ?>

				<?php submit_button( __( 'Save homepage cards', 'verus' ) ); ?>
			</form>
		<?php endif; ?>
	</div>
	<?php
}
