<?php
/**
 * Search results.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="v-hero v-hero--short">
	<div class="v-hero__media" style="--v-hero-img:url(<?php echo esc_url( VERUS_URI . '/assets/images/hero-bg.jpg' ); ?>)" aria-hidden="true"></div>
	<div class="v-shell v-hero__inner">
		<p class="v-eyebrow"><?php esc_html_e( 'Search', 'verus' ); ?></p>
		<h1 class="v-hero__h1"><?php printf( esc_html__( 'Results for “%s”', 'verus' ), esc_html( get_search_query() ) ); ?></h1>
	</div>
</section>
<section class="v-section">
	<div class="v-shell v-shell--narrow">
		<?php if ( have_posts() ) : ?>
			<div class="v-related__grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<a class="v-rel" href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
						<span class="v-rel__go" aria-hidden="true">→</span>
					</a>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<p><?php esc_html_e( 'Nothing matched. Try a service name, or book a meeting and ask us.', 'verus' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
verus_render_cta();
get_footer();
