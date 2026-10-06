<?php
/**
 * 404.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="v-hero">
	<div class="v-hero__media" style="--v-hero-img:url(<?php echo esc_url( VERUS_URI . '/assets/images/hero-bg.jpg' ); ?>)" aria-hidden="true"></div>
	<div class="v-shell v-hero__inner">
		<p class="v-eyebrow"><?php esc_html_e( '404', 'verus' ); ?></p>
		<h1 class="v-hero__h1"><?php esc_html_e( 'That page is not here.', 'verus' ); ?></h1>
		<p class="v-hero__sub"><?php esc_html_e( 'It may have moved in the redesign. The meeting still works.', 'verus' ); ?></p>
		<div class="v-hero__actions">
			<a class="v-btn v-btn--gold" href="<?php echo esc_url( verus_meeting_url() ); ?>"<?php echo verus_link_atts( verus_meeting_url() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( verus_opt( 'meeting_label', 'Book A Meeting' ) ); ?></a>
			<a class="v-btn v-btn--ghost" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'verus' ); ?></a>
		</div>
	</div>
</section>
<?php
get_footer();
