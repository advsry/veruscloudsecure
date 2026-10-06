<?php
/**
 * Template Name: Contact
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();

$data = verus_service_data();
verus_render_hero( $data['hero'] );

$phone = verus_opt( 'phone', '1-800-958-3787' );
$email = verus_opt( 'email', 'info@veruscloudsecure.com' );
$acct  = verus_field( 'accounting_email', $email );
$exp   = verus_field( 'experts_email', $email );
$intro = verus_field( 'form_intro', __( 'Email one of our experts for questions or concerns. We are here for you.', 'verus' ) );
$sc    = verus_field( 'form_shortcode', '' );
?>

<section class="v-section v-contact">
	<div class="v-shell v-contact__grid">
		<div class="v-contact__form">
			<p class="v-eyebrow v-eyebrow--dark"><?php esc_html_e( 'Contact Us', 'verus' ); ?></p>
			<h2><?php esc_html_e( 'Meet With Our Team', 'verus' ); ?></h2>
			<p class="v-lede"><?php echo esc_html( $intro ); ?></p>
			<?php
			if ( $sc ) {
				echo do_shortcode( $sc );
			} elseif ( is_active_sidebar( 'contact-form' ) ) {
				dynamic_sidebar( 'contact-form' );
			} else {
				echo '<p class="v-contact__hint">' . esc_html__( 'Drop a form shortcode into the Contact Form widget area, or paste a shortcode in the Contact ACF fields.', 'verus' ) . '</p>';
			}
			?>
		</div>
		<aside class="v-contact__aside">
			<article class="v-pain">
				<span class="v-pain__icon"><?php echo verus_icon( 'phone' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<h3><?php esc_html_e( 'Call', 'verus' ); ?></h3>
				<p><a href="tel:<?php echo esc_attr( verus_tel( $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a></p>
			</article>
			<article class="v-pain">
				<span class="v-pain__icon"><?php echo verus_icon( 'mail' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<h3><?php esc_html_e( 'Email', 'verus' ); ?></h3>
				<p><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
			</article>
			<article class="v-pain">
				<span class="v-pain__icon"><?php echo verus_icon( 'headset' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<h3><?php esc_html_e( 'IT Ticket Portal', 'verus' ); ?></h3>
				<p><?php esc_html_e( 'Login and see your current IT tickets or create a new one for assistance.', 'verus' ); ?></p>
				<?php if ( verus_opt( 'ticket_portal' ) ) : ?>
					<p><a href="<?php echo esc_url( verus_opt( 'ticket_portal' ) ); ?>"><?php esc_html_e( 'IT Ticket Portal', 'verus' ); ?> →</a></p>
				<?php endif; ?>
			</article>
			<article class="v-pain">
				<span class="v-pain__icon"><?php echo verus_icon( 'users' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<h3><?php esc_html_e( 'Useful Links', 'verus' ); ?></h3>
				<p><?php esc_html_e( 'Accounting', 'verus' ); ?>: <?php esc_html_e( 'Email our accounting team. Please allow 24 hours for a response.', 'verus' ); ?> <a href="mailto:<?php echo esc_attr( $acct ); ?>"><?php echo esc_html( $acct ); ?></a><br>
				<?php esc_html_e( 'Contact Our Experts', 'verus' ); ?>: <a href="mailto:<?php echo esc_attr( $exp ); ?>"><?php echo esc_html( $exp ); ?></a></p>
			</article>
		</aside>
	</div>
</section>

<?php
verus_render_cta( $data['cta'] );
get_footer();
