<?php
/**
 * Front page — lead-generation home.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$d = verus_defaults( 'home' );
$data = verus_service_data( 'home' );
$data['hero']['crumbs'] = false;
$data['hero']['logo']   = true;

verus_render_hero( $data['hero'] );
verus_render_stats( $data['stats'] );

$pillars = verus_rows( 'pillar', 4, isset( $d['pillars'] ) ? $d['pillars'] : array() );
if ( $pillars ) :
	?>
	<section class="v-section v-pillars">
		<div class="v-shell">
			<div class="v-head">
				<p class="v-eyebrow v-eyebrow--dark"><?php echo esc_html( verus_copy( 'pillars_eyebrow', $d['pillars_eyebrow'] ) ); ?></p>
				<h2><?php echo esc_html( verus_copy( 'pillars_title', $d['pillars_title'] ) ); ?></h2>
				<p class="v-lede"><?php echo esc_html( verus_copy( 'pillars_lede', $d['pillars_lede'] ) ); ?></p>
			</div>
			<div class="v-pillar-grid v-reveal-group">
				<?php foreach ( $pillars as $p ) : ?>
					<a class="v-pillar v-reveal" href="<?php echo esc_url( $p['url'] ); ?>">
						<span class="v-pillar__icon"><?php echo verus_icon( ! empty( $p['icon'] ) ? $p['icon'] : 'star' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
						<h3><?php echo esc_html( $p['title'] ); ?></h3>
						<p><?php echo esc_html( $p['text'] ); ?></p>
						<span class="v-pillar__go"><?php esc_html_e( 'Explore', 'verus' ); ?> →</span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
endif;

verus_render_problem( $data['problem'] );

$aaim = verus_rows( 'aaim', 4, isset( $d['aaim'] ) ? $d['aaim'] : array() );
if ( $aaim ) :
	?>
	<section class="v-section v-aaim">
		<div class="v-shell">
			<div class="v-head">
				<p class="v-eyebrow v-eyebrow--dark"><?php echo esc_html( verus_copy( 'aaim_eyebrow', $d['aaim_eyebrow'] ) ); ?></p>
				<h2><?php echo esc_html( verus_copy( 'aaim_title', $d['aaim_title'] ) ); ?></h2>
				<p class="v-lede"><?php echo esc_html( verus_copy( 'aaim_lede', $d['aaim_lede'] ) ); ?></p>
			</div>
			<ol class="v-aaim__grid">
				<?php foreach ( $aaim as $i => $step ) : ?>
					<li class="v-aaim__step">
						<span class="v-aaim__num"><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
						<h3><?php echo esc_html( $step['title'] ); ?></h3>
						<p><?php echo esc_html( $step['text'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>
	<?php
endif;

verus_render_why( $data['why'] );

$quotes = verus_rows( 'testimonial', 6, isset( $d['testimonials'] ) ? $d['testimonials'] : array() );
if ( $quotes ) :
	?>
	<section class="v-section v-quotes">
		<div class="v-shell">
			<div class="v-head">
				<p class="v-eyebrow v-eyebrow--dark"><?php echo esc_html( verus_copy( 'testimonials_eyebrow', $d['testimonials_eyebrow'] ) ); ?></p>
				<h2><?php echo esc_html( verus_copy( 'testimonials_title', $d['testimonials_title'] ) ); ?></h2>
			</div>
			<div class="v-quote-grid">
				<?php foreach ( $quotes as $q ) : ?>
					<blockquote class="v-quote">
						<p><?php echo esc_html( $q['text'] ); ?></p>
						<footer><?php echo esc_html( $q['title'] ); ?></footer>
					</blockquote>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
endif;

verus_render_faq( $data['faq'] );
verus_render_cta( $data['cta'] );

get_footer();
