<?php
/**
 * Blog index.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="v-hero v-hero--short">
	<div class="v-hero__media" style="--v-hero-img:url(<?php echo esc_url( VERUS_URI . '/assets/images/hero-bg.jpg' ); ?>)" aria-hidden="true"></div>
	<div class="v-shell v-hero__inner">
		<p class="v-eyebrow"><?php esc_html_e( 'Resources', 'verus' ); ?></p>
		<h1 class="v-hero__h1"><?php esc_html_e( 'News & Insights', 'verus' ); ?></h1>
		<p class="v-hero__sub"><?php esc_html_e( 'What we are seeing across cybersecurity, AI, and operations.', 'verus' ); ?></p>
	</div>
</section>
<section class="v-section">
	<div class="v-shell">
		<?php if ( have_posts() ) : ?>
			<div class="v-post-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<a class="v-post-card" href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'verus-card' ); ?>
						<?php endif; ?>
						<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
						<h2><?php the_title(); ?></h2>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
					</a>
				<?php endwhile; ?>
			</div>
			<div class="v-pagination"><?php the_posts_pagination(); ?></div>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts yet.', 'verus' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
verus_render_cta();
get_footer();
