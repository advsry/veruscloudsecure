<?php
/**
 * Theme supports, assets, and image sizes.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register theme supports and menus.
 */
function verus_setup() {
	load_theme_textdomain( 'verus', VERUS_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 72,
		'width'       => 220,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );

	add_image_size( 'verus-card', 720, 450, true );
	add_image_size( 'verus-hero', 1920, 1280, true );

	register_nav_menus( array(
		'primary'       => __( 'Primary Navigation (mega menu)', 'verus' ),
		'footer_col_1'  => __( 'Footer Column 1', 'verus' ),
		'footer_col_2'  => __( 'Footer Column 2', 'verus' ),
		'footer_col_3'  => __( 'Footer Column 3', 'verus' ),
		'footer_col_4'  => __( 'Footer Column 4', 'verus' ),
		'footer_legal'  => __( 'Footer Legal', 'verus' ),
	) );
}
add_action( 'after_setup_theme', 'verus_setup' );

/**
 * Enqueue front-end assets.
 */
function verus_enqueue_assets() {
	wp_enqueue_style(
		'verus-typekit',
		'https://use.typekit.net/itd3ryy.css',
		array(),
		null
	);

	wp_enqueue_style(
		'verus-fonts',
		'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'verus-main',
		VERUS_URI . '/assets/css/main.css',
		array( 'verus-typekit', 'verus-fonts' ),
		VERUS_VERSION
	);

	wp_enqueue_script(
		'verus-main',
		VERUS_URI . '/assets/js/main.js',
		array(),
		VERUS_VERSION,
		true
	);

	wp_localize_script( 'verus-main', 'verusTheme', array(
		'meetingUrl' => verus_meeting_url(),
	) );

	if ( is_page( 'book-a-meeting' ) ) {
		wp_enqueue_script(
			'calendly-widget',
			'https://assets.calendly.com/assets/external/widget.js',
			array(),
			null,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'verus_enqueue_assets' );

/**
 * Preconnect font origins.
 *
 * @param array  $hints    Existing hints.
 * @param string $relation Relation type.
 * @return array
 */
function verus_resource_hints( $hints, $relation ) {
	if ( 'preconnect' === $relation ) {
		$hints[] = array( 'href' => 'https://use.typekit.net' );
		$hints[] = array( 'href' => 'https://p.typekit.net', 'crossorigin' => true );
		$hints[] = array( 'href' => 'https://fonts.googleapis.com' );
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => true );
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'verus_resource_hints', 10, 2 );

/**
 * Contact form widget area (drop WPForms / Gravity / CF7 here).
 */
function verus_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Contact Form', 'verus' ),
		'id'            => 'contact-form',
		'description'   => __( 'Place your contact form shortcode or block here. Used on the Contact page.', 'verus' ),
		'before_widget' => '<div id="%1$s" class="v-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="v-widget__title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'verus_widgets_init' );

/**
 * Show the Description field on Appearance → Menus (used as mega-menu blurbs).
 */
function verus_enable_menu_item_description() {
	add_filter( 'manage_nav-menus_columns', 'verus_nav_menu_columns', 99 );
}
add_action( 'admin_init', 'verus_enable_menu_item_description' );

/**
 * Force the Description column on.
 *
 * @param array $columns Columns.
 * @return array
 */
function verus_nav_menu_columns( $columns ) {
	$columns['description'] = __( 'Description', 'verus' );
	return $columns;
}

/**
 * Excerpt length for resource cards.
 *
 * @param int $length Length.
 * @return int
 */
function verus_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'verus_excerpt_length' );

/**
 * Body class for template type.
 *
 * @param array $classes Classes.
 * @return array
 */
function verus_body_class( $classes ) {
	$classes[] = 'v-theme';
	$classes[] = 'v-page';
	return $classes;
}
add_filter( 'body_class', 'verus_body_class' );

/**
 * Gutenberg often drops ACF metabox values on save (especially behind Cloudflare).
 * Classic editor posts the fields with the page, so homepage pillars persist.
 *
 * @param bool    $use  Whether to use the block editor.
 * @param WP_Post $post Post.
 * @return bool
 */
function verus_disable_block_editor_for_acf_pages( $use, $post ) {
	if ( ! $post || 'page' !== $post->post_type ) {
		return $use;
	}
	$front = (int) get_option( 'page_on_front' );
	if ( $front && (int) $post->ID === $front ) {
		return false;
	}
	$template = get_page_template_slug( $post );
	$ours     = array(
		'page-templates/service.php',
		'page-templates/hub.php',
		'page-templates/industry.php',
		'page-templates/about.php',
		'page-templates/contact.php',
		'page-templates/book-meeting.php',
	);
	if ( in_array( $template, $ours, true ) ) {
		return false;
	}
	return $use;
}
add_filter( 'use_block_editor_for_post', 'verus_disable_block_editor_for_acf_pages', 10, 2 );

/**
 * Page IDs that use ACF layout templates (not the WordPress content editor).
 *
 * @param int $post_id Post ID.
 * @return bool
 */
function verus_is_acf_layout_page( $post_id ) {
	$post_id = (int) $post_id;
	if ( ! $post_id ) {
		return false;
	}
	$front = (int) get_option( 'page_on_front' );
	if ( $front && $post_id === $front ) {
		return true;
	}
	$template = get_page_template_slug( $post_id );
	$ours     = array(
		'page-templates/service.php',
		'page-templates/hub.php',
		'page-templates/industry.php',
		'page-templates/about.php',
		'page-templates/contact.php',
		'page-templates/book-meeting.php',
	);
	return in_array( $template, $ours, true );
}

/**
 * Hide the content editor on ACF layout pages.
 * Those pages still contain old Cornerstone HTML; posting it with ACF causes HTTP 413.
 */
function verus_hide_content_editor_on_acf_pages() {
	$id = verus_editing_post_id();
	if ( verus_is_acf_layout_page( $id ) ) {
		remove_post_type_support( 'page', 'editor' );
	}
}
add_action( 'load-post.php', 'verus_hide_content_editor_on_acf_pages' );
add_action( 'load-post-new.php', 'verus_hide_content_editor_on_acf_pages' );

/**
 * Post ID currently being edited in wp-admin.
 *
 * @return int
 */
function verus_editing_post_id() {
	if ( isset( $_GET['post'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		return (int) $_GET['post'];
	}
	if ( isset( $_POST['post_ID'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Missing
		return (int) $_POST['post_ID'];
	}
	return 0;
}

/**
 * Strip leftover Cornerstone/Pro HTML from layout pages.
 * Classic editor "Update" posts that markup in one request; hosts then return HTTP 413.
 * Cornerstone itself saved via AJAX, which is why the duplicate site never hit this.
 */
function verus_trim_oversized_page_content() {
	$id = verus_editing_post_id();
	if ( ! $id || ! verus_is_acf_layout_page( $id ) || ! current_user_can( 'edit_post', $id ) ) {
		return;
	}
	global $wpdb;
	$len = (int) $wpdb->get_var( $wpdb->prepare( "SELECT CHAR_LENGTH(post_content) FROM {$wpdb->posts} WHERE ID = %d", $id ) );
	if ( $len < 8000 ) {
		return;
	}
	$wpdb->update(
		$wpdb->posts,
		array( 'post_content' => '' ),
		array( 'ID' => $id ),
		array( '%s' ),
		array( '%d' )
	);
	clean_post_cache( $id );
	add_filter( 'redirect_post_location', 'verus_trim_notice_redirect' );
	add_action( 'admin_notices', 'verus_trim_content_notice' );
}
add_action( 'load-post.php', 'verus_trim_oversized_page_content', 1 );

/**
 * Flag the redirect after a manual save so the notice can show once.
 *
 * @param string $location Redirect URL.
 * @return string
 */
function verus_trim_notice_redirect( $location ) {
	return add_query_arg( 'verus_trimmed', '1', $location );
}

/**
 * Admin notice after leftover builder HTML is removed.
 */
function verus_trim_content_notice() {
	echo '<div class="notice notice-success is-dismissible"><p>';
	echo esc_html__( 'Verus removed leftover page-builder HTML from this page so WordPress can save it. That markup is not used by the new theme. You can click Update again.', 'verus' );
	echo '</p></div>';
}
add_action( 'admin_notices', function () {
	if ( isset( $_GET['verus_trimmed'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		verus_trim_content_notice();
	}
} );

/**
 * Layout pages do not use post_content. Never write the old builder HTML back.
 *
 * @param array $data    Sanitized post data.
 * @param array $postarr Raw post data.
 * @return array
 */
function verus_keep_hidden_editor_content( $data, $postarr ) {
	$id = isset( $postarr['ID'] ) ? (int) $postarr['ID'] : 0;
	if ( $id && verus_is_acf_layout_page( $id ) ) {
		$data['post_content'] = '';
	}
	return $data;
}
add_filter( 'wp_insert_post_data', 'verus_keep_hidden_editor_content', 10, 2 );

/**
 * Blank any leftover content textarea before the browser submits (classic editor).
 */
function verus_blank_content_on_submit() {
	$screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
	if ( ! $screen || 'page' !== $screen->id ) {
		return;
	}
	$id = verus_editing_post_id();
	if ( ! verus_is_acf_layout_page( $id ) ) {
		return;
	}
	?>
	<script>
	(function () {
		function emptyContent() {
			var el = document.getElementById('content');
			if (el) { el.value = ''; }
			if (window.tinymce && tinymce.get('content')) {
				tinymce.get('content').setContent('');
			}
		}
		emptyContent();
		document.addEventListener('submit', emptyContent, true);
	})();
	</script>
	<?php
}
add_action( 'admin_footer-post.php', 'verus_blank_content_on_submit' );

/**
 * ACF JSON save point inside the theme.
 *
 * @param string $path Path.
 * @return string
 */
function verus_acf_json_save( $path ) {
	return VERUS_DIR . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'verus_acf_json_save' );

/**
 * ACF JSON load point.
 *
 * @param array $paths Paths.
 * @return array
 */
function verus_acf_json_load( $paths ) {
	$paths[] = VERUS_DIR . '/acf-json';
	return $paths;
}
add_filter( 'acf/settings/load_json', 'verus_acf_json_load' );
