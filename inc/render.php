<?php
/**
 * Section renderers shared by page templates.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hero used on service, industry, hub, about, and home pages.
 *
 * @param array $args {
 *   @type string $eyebrow
 *   @type string $title
 *   @type string $sub
 *   @type string $answer
 *   @type string $primary_label
 *   @type string $primary_url
 *   @type string $secondary_label
 *   @type string $secondary_url
 *   @type array  $trust
 *   @type bool   $crumbs
 *   @type bool   $logo
 *   @type string $image
 * }
 */
function verus_render_hero( $args = array() ) {
	$args = wp_parse_args( $args, array(
		'eyebrow'          => '',
		'title'            => get_the_title(),
		'sub'              => '',
		'answer'           => '',
		'primary_label'    => verus_opt( 'meeting_label', 'Book A Meeting' ),
		'primary_url'      => verus_meeting_url(),
		'secondary_label'  => '',
		'secondary_url'    => '',
		'trust'            => array(),
		'crumbs'           => true,
		'logo'             => false,
		'image'            => verus_hero_image(),
	) );
	?>
	<section class="v-hero">
		<div class="v-hero__media" style="--v-hero-img:url(<?php echo esc_url( $args['image'] ); ?>)" aria-hidden="true"></div>
		<div class="v-shell v-hero__inner">
			<?php if ( $args['crumbs'] ) { verus_breadcrumbs(); } ?>
			<?php if ( $args['eyebrow'] ) : ?>
				<p class="v-eyebrow"><?php echo esc_html( $args['eyebrow'] ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $args['logo'] ) ) : ?>
				<div class="v-hero__lockup">
					<p class="v-hero__logo">
						<img src="<?php echo esc_url( VERUS_URI . '/assets/images/logo-white.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="280" height="115">
					</p>
					<span class="v-hero__pipe" aria-hidden="true"></span>
					<h1 class="v-hero__h1"><?php echo esc_html( $args['title'] ); ?></h1>
				</div>
			<?php else : ?>
				<h1 class="v-hero__h1"><?php echo esc_html( $args['title'] ); ?></h1>
			<?php endif; ?>
			<?php if ( $args['sub'] ) : ?>
				<p class="v-hero__sub"><?php echo esc_html( $args['sub'] ); ?></p>
			<?php endif; ?>
			<?php if ( $args['answer'] ) : ?>
				<p class="v-answer"><?php echo esc_html( $args['answer'] ); ?></p>
			<?php endif; ?>
			<div class="v-hero__actions">
				<?php if ( $args['primary_label'] ) : ?>
					<a class="v-btn v-btn--gold" href="<?php echo esc_url( $args['primary_url'] ); ?>"<?php echo verus_link_atts( $args['primary_url'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $args['primary_label'] ); ?></a>
				<?php endif; ?>
				<?php if ( $args['secondary_label'] && $args['secondary_url'] ) : ?>
					<a class="v-btn v-btn--ghost" href="<?php echo esc_url( $args['secondary_url'] ); ?>"><?php echo esc_html( $args['secondary_label'] ); ?></a>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $args['trust'] ) ) : ?>
				<ul class="v-trust">
					<?php foreach ( $args['trust'] as $item ) : ?>
						<li><?php echo verus_tick(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> <?php echo esc_html( is_array( $item ) ? $item['title'] : $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</section>
	<?php
}

/**
 * Optional form / shortcode band, used under the hero on assessment pages.
 *
 * @param array $args Args.
 */
function verus_render_embed( $args = array() ) {
	$args = wp_parse_args( $args, array(
		'shortcode' => '',
		'eyebrow'   => '',
		'title'     => '',
		'lede'      => '',
	) );
	$shortcode = trim( (string) $args['shortcode'] );
	if ( '' === $shortcode ) {
		return;
	}
	?>
	<section class="v-section v-embed" id="assessment">
		<div class="v-shell v-shell--narrow">
			<?php if ( $args['eyebrow'] || $args['title'] || $args['lede'] ) : ?>
				<div class="v-head">
					<?php if ( $args['eyebrow'] ) : ?><p class="v-eyebrow v-eyebrow--dark"><?php echo esc_html( $args['eyebrow'] ); ?></p><?php endif; ?>
					<?php if ( $args['title'] ) : ?><h2><?php echo esc_html( $args['title'] ); ?></h2><?php endif; ?>
					<?php if ( $args['lede'] ) : ?><p class="v-lede"><?php echo esc_html( $args['lede'] ); ?></p><?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="v-embed__form">
				<?php echo do_shortcode( $shortcode ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Problem / risk card grid.
 *
 * @param array $args Args.
 */
function verus_render_problem( $args ) {
	$args = wp_parse_args( $args, array(
		'eyebrow' => '',
		'title'   => '',
		'lede'    => '',
		'items'   => array(),
	) );
	if ( empty( $args['title'] ) && empty( $args['items'] ) ) {
		return;
	}
	?>
	<section class="v-section v-problem">
		<div class="v-shell">
			<div class="v-head">
				<?php if ( $args['eyebrow'] ) : ?><p class="v-eyebrow v-eyebrow--dark"><?php echo esc_html( $args['eyebrow'] ); ?></p><?php endif; ?>
				<?php if ( $args['title'] ) : ?><h2><?php echo esc_html( $args['title'] ); ?></h2><?php endif; ?>
				<?php if ( $args['lede'] ) : ?><p class="v-lede"><?php echo esc_html( $args['lede'] ); ?></p><?php endif; ?>
			</div>
			<?php if ( ! empty( $args['items'] ) ) : ?>
				<div class="v-grid-3 v-reveal-group">
					<?php foreach ( $args['items'] as $item ) : ?>
						<details class="v-pain v-reveal">
							<summary class="v-pain__summary">
								<span class="v-pain__row">
									<span class="v-pain__icon"><?php echo verus_icon( ! empty( $item['icon'] ) ? $item['icon'] : 'shield' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
									<h3><?php echo esc_html( $item['title'] ); ?></h3>
									<span class="v-pain__chev" aria-hidden="true"></span>
								</span>
							</summary>
							<div class="v-pain__body">
								<?php if ( ! empty( $item['text'] ) ) : ?><p><?php echo esc_html( $item['text'] ); ?></p><?php endif; ?>
								<?php if ( ! empty( $item['url'] ) ) : ?>
									<a class="v-svc__more" href="<?php echo esc_url( $item['url'] ); ?>"><?php esc_html_e( 'Learn more', 'verus' ); ?> →</a>
								<?php endif; ?>
							</div>
						</details>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<?php
}

/**
 * Capability cards (Oracle-style, with optional featured band).
 *
 * @param array $args Args.
 */
function verus_render_capabilities( $args ) {
	$args = wp_parse_args( $args, array(
		'eyebrow' => '',
		'title'   => '',
		'lede'    => '',
		'items'   => array(),
	) );
	if ( empty( $args['items'] ) ) {
		return;
	}
	?>
	<section class="v-section v-services">
		<div class="v-shell">
			<div class="v-head">
				<?php if ( $args['eyebrow'] ) : ?><p class="v-eyebrow v-eyebrow--dark"><?php echo esc_html( $args['eyebrow'] ); ?></p><?php endif; ?>
				<?php if ( $args['title'] ) : ?><h2><?php echo esc_html( $args['title'] ); ?></h2><?php endif; ?>
				<?php if ( $args['lede'] ) : ?><p class="v-lede"><?php echo esc_html( $args['lede'] ); ?></p><?php endif; ?>
			</div>
			<div class="v-svc-grid v-reveal-group">
				<?php
				$i = 0;
				foreach ( $args['items'] as $item ) :
					$i++;
					$feature = ! empty( $item['featured'] );
					?>
					<article class="v-svc<?php echo $feature ? ' v-svc--feature' : ''; ?> v-reveal">
						<span class="v-svc__num" aria-hidden="true"><?php echo esc_html( str_pad( (string) $i, 2, '0', STR_PAD_LEFT ) ); ?></span>
						<span class="v-svc__icon"><?php echo verus_icon( ! empty( $item['icon'] ) ? $item['icon'] : 'star' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
						<?php if ( ! empty( $item['tag'] ) ) : ?><p class="v-svc__tag"><?php echo esc_html( $item['tag'] ); ?></p><?php endif; ?>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<?php if ( ! empty( $item['text'] ) ) : ?><p><?php echo esc_html( $item['text'] ); ?></p><?php endif; ?>
						<?php if ( ! empty( $item['url'] ) ) : ?>
							<a class="v-svc__more" href="<?php echo esc_url( $item['url'] ); ?>"><?php esc_html_e( 'Learn more', 'verus' ); ?> →</a>
						<?php endif; ?>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Dark differentiator band.
 *
 * @param array $args Args.
 */
function verus_render_why( $args ) {
	$args = wp_parse_args( $args, array(
		'eyebrow' => __( 'Why Verus', 'verus' ),
		'title'   => '',
		'items'   => array(),
	) );
	if ( empty( $args['items'] ) ) {
		return;
	}
	?>
	<section class="v-section v-diff">
		<div class="v-shell">
			<div class="v-head v-head--light">
				<?php if ( $args['eyebrow'] ) : ?><p class="v-eyebrow"><?php echo esc_html( $args['eyebrow'] ); ?></p><?php endif; ?>
				<?php if ( $args['title'] ) : ?><h2><?php echo esc_html( $args['title'] ); ?></h2><?php endif; ?>
			</div>
			<div class="v-diff-grid v-reveal-group">
				<?php foreach ( $args['items'] as $item ) : ?>
					<article class="v-diff__card v-reveal">
						<span class="v-diff__rule" aria-hidden="true"></span>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<?php if ( ! empty( $item['text'] ) ) : ?><p><?php echo esc_html( $item['text'] ); ?></p><?php endif; ?>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Stat strip.
 *
 * @param array $items Items with metric + label.
 */
function verus_render_stats( $items ) {
	if ( empty( $items ) ) {
		return;
	}
	?>
	<section class="v-stats" aria-label="<?php esc_attr_e( 'At a glance', 'verus' ); ?>">
		<div class="v-shell v-stats__grid">
			<?php foreach ( $items as $item ) : ?>
				<div class="v-stat">
					<span class="v-stat__metric"><?php echo esc_html( $item['metric'] ); ?></span>
					<span class="v-stat__label"><?php echo esc_html( $item['label'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
	<?php
}

/**
 * Final CTA band.
 *
 * @param array $args Args.
 */
function verus_render_cta( $args = array() ) {
	$args = wp_parse_args( $args, array(
		'title'            => __( 'Ready to talk?', 'verus' ),
		'text'             => __( 'Book 30 minutes with a senior consultant. We will map the risk, the work, and a right-sized next step.', 'verus' ),
		'label'            => verus_opt( 'meeting_label', 'Book A Meeting' ),
		'url'              => verus_meeting_url(),
		'secondary_label'  => '',
		'secondary_url'    => '',
		'note'             => __( 'Fixed scope · No obligation · Senior consultant on the call', 'verus' ),
	) );
	?>
	<section class="v-cta" id="book">
		<div class="v-shell v-cta__inner">
			<div class="v-cta__copy">
				<h2><?php echo esc_html( $args['title'] ); ?></h2>
				<?php if ( $args['text'] ) : ?><p><?php echo esc_html( $args['text'] ); ?></p><?php endif; ?>
			</div>
			<div class="v-cta__action">
				<a class="v-btn v-btn--gold v-btn--lg" href="<?php echo esc_url( $args['url'] ); ?>"<?php echo verus_link_atts( $args['url'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $args['label'] ); ?></a>
				<?php if ( $args['secondary_label'] && $args['secondary_url'] ) : ?>
					<a class="v-btn v-btn--ghost v-btn--lg" href="<?php echo esc_url( $args['secondary_url'] ); ?>"<?php echo verus_link_atts( $args['secondary_url'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $args['secondary_label'] ); ?></a>
				<?php endif; ?>
				<?php if ( $args['note'] ) : ?><p class="v-cta__note"><?php echo esc_html( $args['note'] ); ?></p><?php endif; ?>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Short proof / case-study band (used on AI Services).
 *
 * @param array $args Args.
 */
function verus_render_proof( $args ) {
	$args = wp_parse_args( $args, array(
		'eyebrow' => '',
		'title'   => '',
		'metric'  => '',
		'label'   => '',
		'text'    => '',
		'note'    => '',
	) );
	if ( empty( $args['title'] ) && empty( $args['text'] ) && empty( $args['metric'] ) ) {
		return;
	}
	?>
	<section class="v-section v-proof">
		<div class="v-shell">
			<div class="v-proof__card">
				<div class="v-proof__copy">
					<?php if ( $args['eyebrow'] ) : ?><p class="v-eyebrow v-eyebrow--dark"><?php echo esc_html( $args['eyebrow'] ); ?></p><?php endif; ?>
					<?php if ( $args['title'] ) : ?><h2><?php echo esc_html( $args['title'] ); ?></h2><?php endif; ?>
					<?php if ( $args['text'] ) : ?><p><?php echo esc_html( $args['text'] ); ?></p><?php endif; ?>
					<?php if ( $args['note'] ) : ?><p class="v-proof__note"><?php echo esc_html( $args['note'] ); ?></p><?php endif; ?>
				</div>
				<?php if ( $args['metric'] ) : ?>
					<div class="v-proof__stat">
						<span class="v-proof__metric"><?php echo esc_html( $args['metric'] ); ?></span>
						<?php if ( $args['label'] ) : ?><span class="v-proof__label"><?php echo esc_html( $args['label'] ); ?></span><?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php
}

/**
 * FAQ accordion (details/summary — good for AIOSEO FAQ schema too if configured).
 *
 * @param array $args Args.
 */
function verus_render_faq( $args ) {
	$args = wp_parse_args( $args, array(
		'eyebrow' => __( 'FAQ', 'verus' ),
		'title'   => __( 'Common Questions', 'verus' ),
		'items'   => array(),
	) );
	if ( empty( $args['items'] ) ) {
		return;
	}
	?>
	<section class="v-section v-faq">
		<div class="v-shell v-shell--narrow">
			<div class="v-head">
				<?php if ( $args['eyebrow'] ) : ?><p class="v-eyebrow v-eyebrow--dark"><?php echo esc_html( $args['eyebrow'] ); ?></p><?php endif; ?>
				<?php if ( $args['title'] ) : ?><h2><?php echo esc_html( $args['title'] ); ?></h2><?php endif; ?>
			</div>
			<div class="v-acc">
				<?php foreach ( $args['items'] as $i => $item ) : ?>
					<details class="v-acc__item"<?php echo 0 === $i ? ' open' : ''; ?>>
						<summary>
							<span><?php echo esc_html( $item['question'] ); ?></span>
							<i aria-hidden="true"></i>
						</summary>
						<div class="v-acc__body"><p><?php echo esc_html( $item['answer'] ); ?></p></div>
					</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Related page cards.
 *
 * @param array  $pages    WP_Post objects or arrays with title, url, text.
 * @param string $heading  Heading.
 */
function verus_render_related( $pages, $heading = '' ) {
	if ( empty( $pages ) ) {
		return;
	}
	if ( ! $heading ) {
		$heading = __( 'Related', 'verus' );
	}
	?>
	<section class="v-related">
		<div class="v-shell">
			<h2 class="v-related__title"><?php echo esc_html( $heading ); ?></h2>
			<div class="v-related__grid">
				<?php foreach ( $pages as $page ) :
					if ( $page instanceof WP_Post ) {
						$title = get_the_title( $page );
						$url   = get_permalink( $page );
						$text  = get_the_excerpt( $page );
					} else {
						$title = $page['title'];
						$url   = $page['url'];
						$text  = isset( $page['text'] ) ? $page['text'] : '';
					}
					?>
					<a class="v-rel" href="<?php echo esc_url( $url ); ?>">
						<h3><?php echo esc_html( $title ); ?></h3>
						<?php if ( $text ) : ?><p><?php echo esc_html( wp_strip_all_tags( $text ) ); ?></p><?php endif; ?>
						<span class="v-rel__go" aria-hidden="true">→</span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Child page card grid for hub templates.
 *
 * @param int    $parent_id Parent page ID.
 * @param string $heading   Optional heading.
 */
function verus_render_children( $parent_id, $heading = '' ) {
	$children = get_pages( array(
		'parent'      => $parent_id,
		'sort_column' => 'menu_order,post_title',
	) );
	if ( empty( $children ) ) {
		return;
	}
	$items = array();
	foreach ( $children as $child ) {
		$items[] = array(
			'title' => get_the_title( $child ),
			'url'   => get_permalink( $child ),
			'text'  => $child->post_excerpt ? $child->post_excerpt : wp_trim_words( wp_strip_all_tags( $child->post_content ), 22 ),
		);
	}
	verus_render_related( $items, $heading );
}

/**
 * Assemble a service/industry page from ACF + defaults.
 *
 * @return array
 */
function verus_service_data( $slug = '' ) {
	$d = verus_defaults( $slug );

	$trust = verus_rows( 'trust', 3, isset( $d['trust'] ) ? $d['trust'] : array() );
	$pains = verus_rows( 'pain', 6, isset( $d['pains'] ) ? $d['pains'] : array() );
	$caps  = verus_rows( 'cap', 8, isset( $d['caps'] ) ? $d['caps'] : array() );
	$whys  = verus_rows( 'why', 4, isset( $d['whys'] ) ? $d['whys'] : array() );
	$stats = verus_rows( 'stat', 4, isset( $d['stats'] ) ? $d['stats'] : array() );
	$faqs  = verus_rows( 'faq', 8, isset( $d['faqs'] ) ? $d['faqs'] : array() );

	return array(
		'hero' => array(
			'eyebrow'         => verus_copy( 'hero_eyebrow', isset( $d['eyebrow'] ) ? $d['eyebrow'] : '' ),
			'title'           => verus_copy( 'hero_title', isset( $d['title'] ) ? $d['title'] : get_the_title() ),
			'sub'             => verus_copy( 'hero_sub', isset( $d['sub'] ) ? $d['sub'] : '' ),
			'answer'          => verus_copy( 'hero_answer', isset( $d['answer'] ) ? $d['answer'] : '' ),
			'primary_label'   => verus_copy( 'hero_primary_label', isset( $d['primary_label'] ) ? $d['primary_label'] : 'Book A Meeting' ),
			'primary_url'     => verus_copy( 'hero_primary_url', isset( $d['primary_url'] ) ? $d['primary_url'] : verus_meeting_url() ),
			'secondary_label' => verus_copy( 'hero_secondary_label', isset( $d['secondary_label'] ) ? $d['secondary_label'] : '' ),
			'secondary_url'   => verus_copy( 'hero_secondary_url', isset( $d['secondary_url'] ) ? $d['secondary_url'] : '' ),
			'trust'           => $trust,
		),
		'problem' => array(
			'eyebrow' => verus_copy( 'problem_eyebrow', isset( $d['problem_eyebrow'] ) ? $d['problem_eyebrow'] : '' ),
			'title'   => verus_copy( 'problem_title', isset( $d['problem_title'] ) ? $d['problem_title'] : '' ),
			'lede'    => verus_copy( 'problem_lede', isset( $d['problem_lede'] ) ? $d['problem_lede'] : '' ),
			'items'   => $pains,
		),
		'caps' => array(
			'eyebrow' => verus_copy( 'caps_eyebrow', isset( $d['caps_eyebrow'] ) ? $d['caps_eyebrow'] : '' ),
			'title'   => verus_copy( 'caps_title', isset( $d['caps_title'] ) ? $d['caps_title'] : '' ),
			'lede'    => verus_copy( 'caps_lede', isset( $d['caps_lede'] ) ? $d['caps_lede'] : '' ),
			'items'   => $caps,
		),
		'why' => array(
			'eyebrow' => verus_copy( 'why_eyebrow', isset( $d['why_eyebrow'] ) ? $d['why_eyebrow'] : 'Why Verus' ),
			'title'   => verus_copy( 'why_title', isset( $d['why_title'] ) ? $d['why_title'] : '' ),
			'items'   => $whys,
		),
		'stats' => $stats,
		'cta'   => array(
			'title'           => verus_copy( 'cta_title', isset( $d['cta_title'] ) ? $d['cta_title'] : '' ),
			'text'            => verus_copy( 'cta_text', isset( $d['cta_text'] ) ? $d['cta_text'] : '' ),
			'label'           => verus_copy( 'cta_label', isset( $d['cta_label'] ) ? $d['cta_label'] : verus_opt( 'meeting_label', 'Book A Meeting' ) ),
			'url'             => verus_copy( 'cta_url', isset( $d['cta_url'] ) ? $d['cta_url'] : verus_meeting_url() ),
			'secondary_label' => verus_copy( 'cta_secondary_label', isset( $d['cta_secondary_label'] ) ? $d['cta_secondary_label'] : '' ),
			'secondary_url'   => verus_copy( 'cta_secondary_url', isset( $d['cta_secondary_url'] ) ? $d['cta_secondary_url'] : '' ),
			'note'            => verus_copy( 'cta_note', isset( $d['cta_note'] ) ? $d['cta_note'] : '' ),
		),
		'proof' => array(
			'eyebrow' => verus_copy( 'proof_eyebrow', isset( $d['proof_eyebrow'] ) ? $d['proof_eyebrow'] : '' ),
			'title'   => verus_copy( 'proof_title', isset( $d['proof_title'] ) ? $d['proof_title'] : '' ),
			'metric'  => verus_copy( 'proof_metric', isset( $d['proof_metric'] ) ? $d['proof_metric'] : '' ),
			'label'   => verus_copy( 'proof_label', isset( $d['proof_label'] ) ? $d['proof_label'] : '' ),
			'text'    => verus_copy( 'proof_text', isset( $d['proof_text'] ) ? $d['proof_text'] : '' ),
			'note'    => verus_copy( 'proof_note', isset( $d['proof_note'] ) ? $d['proof_note'] : '' ),
		),
		'faq' => array(
			'eyebrow' => verus_copy( 'faq_eyebrow', isset( $d['faq_eyebrow'] ) ? $d['faq_eyebrow'] : '' ),
			'title'   => verus_copy( 'faq_title', isset( $d['faq_title'] ) ? $d['faq_title'] : 'Common Questions' ),
			'items'   => $faqs,
		),
		'embed' => array(
			'shortcode' => verus_copy( 'form_shortcode', isset( $d['form_shortcode'] ) ? $d['form_shortcode'] : '' ),
			'eyebrow'   => verus_copy( 'form_eyebrow', isset( $d['form_eyebrow'] ) ? $d['form_eyebrow'] : '' ),
			'title'     => verus_copy( 'form_title', isset( $d['form_title'] ) ? $d['form_title'] : '' ),
			'lede'      => verus_copy( 'form_lede', isset( $d['form_lede'] ) ? $d['form_lede'] : '' ),
		),
	);
}
