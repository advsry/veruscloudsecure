<?php
/**
 * Generic page (privacy, SMS, etc.).
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="v-hero v-hero--short">
	<div class="v-hero__media" style="--v-hero-img:url(<?php echo esc_url( verus_hero_image() ); ?>)" aria-hidden="true"></div>
	<div class="v-shell v-hero__inner">
		<?php verus_breadcrumbs(); ?>
		<h1 class="v-hero__h1"><?php the_title(); ?></h1>
	</div>
</section>
<article class="v-section">
	<div class="v-shell v-shell--narrow v-prose">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
			if ( 'eula' === get_post_field( 'post_name' ) && '' === trim( wp_strip_all_tags( get_the_content() ) ) ) {
				echo verus_eula_html(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		endwhile;
		?>
	</div>
</article>
<?php
$skip = in_array( get_post_field( 'post_name' ), array( 'privacy-policy', 'sms-terms', 'eula' ), true );
if ( ! $skip ) {
	verus_render_cta();
}
get_footer();
