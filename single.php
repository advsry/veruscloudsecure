<?php
/**
 * Single post.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article class="v-single">
		<section class="v-hero v-hero--short">
			<div class="v-hero__media" style="--v-hero-img:url(<?php echo esc_url( has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'verus-hero' ) : VERUS_URI . '/assets/images/hero-bg.jpg' ); ?>)" aria-hidden="true"></div>
			<div class="v-shell v-hero__inner">
				<p class="v-eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
				<h1 class="v-hero__h1"><?php the_title(); ?></h1>
			</div>
		</section>
		<div class="v-section">
			<div class="v-shell v-shell--narrow v-prose">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
	<?php
endwhile;

verus_render_cta();
get_footer();
