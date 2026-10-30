<?php
/**
 * Test Calendly landings for AI Automation and Private AI Governance.
 *
 * Live pages stay on their current slugs and the service template:
 *   /ai-services/smart-task-automation/
 *   /ai-services/private-ai-governance/
 *
 * These test slugs are separate pages. On the next load after this theme
 * version is active, WordPress creates them if they are missing:
 *   child of AI Services when that page exists, otherwise top-level
 *   /ai-services/smart-task-automation-test/
 *   /ai-services/private-ai-governance-test/
 *
 * If creation cannot run, add those two Pages in WordPress (empty content),
 * assign the matching "Calendly (test)" template, and publish them. The
 * theme prints the layout; page content in the editor is not used.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Test landing registry. Slugs must not match the live service pages.
 *
 * @return array<string,array<string,string>>
 */
function verus_calendly_test_catalog() {
	return array(
		'smart-task-automation-test' => array(
			'title'          => 'Smart Task Automation (Test)',
			'template'       => 'page-templates/ai-automation-calendly.php',
			'document_title' => 'Smart Task Automation & AI Workflow Services | Verus Cloud Secure',
			'description'    => 'Smart task automation from Verus: connect your email, CRM, accounting, and business apps so actions trigger automatically. Book a 30-minute AI Workflow Review.',
		),
		'private-ai-governance-test' => array(
			'title'          => 'Private AI Governance (Test)',
			'template'       => 'page-templates/private-ai-governance-calendly.php',
			'document_title' => 'Private AI Governance & AI Security | Verus Cloud Secure',
			'description'    => 'Private AI Governance from Verus: complete protection for your company data while your team gets powerful, compliant AI tools. Book a 30-minute Private AI Risk Review.',
		),
	);
}

/**
 * Catalog row for the page being viewed, if it is one of the test landings.
 *
 * @return array<string,string>|null
 */
function verus_current_calendly_test() {
	if ( ! is_singular( 'page' ) ) {
		return null;
	}
	$post = get_queried_object();
	if ( ! $post instanceof WP_Post ) {
		return null;
	}
	$catalog = verus_calendly_test_catalog();
	if ( isset( $catalog[ $post->post_name ] ) ) {
		return $catalog[ $post->post_name ];
	}
	$template = get_page_template_slug( $post->ID );
	foreach ( $catalog as $page ) {
		if ( $page['template'] === $template ) {
			return $page;
		}
	}
	return null;
}

/**
 * Inline Calendly widget for both test landings.
 *
 * This is the event embed, not the account link and not the on-site booking page.
 * A min-width under 320px makes Calendly swap in its mobile widget.
 *
 * @return void
 */
function verus_the_calendly_embed() {
	echo '<div class="calendly-inline-widget" data-url="https://calendly.com/tamra-veruscloudsecure/new-meeting" style="min-width:320px;height:700px;"></div>' . "\n";
	echo '<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>' . "\n";
}

/**
 * Whether both test pages exist.
 *
 * @return bool
 */
function verus_calendly_test_pages_ready() {
	foreach ( verus_calendly_test_catalog() as $slug => $page ) {
		$found = get_posts( array(
			'name'             => $slug,
			'post_type'        => 'page',
			'post_status'      => 'any',
			'numberposts'      => 1,
			'suppress_filters' => true,
		) );
		if ( ! $found ) {
			return false;
		}
	}
	return true;
}

/**
 * Create the test pages when they are missing. Does not edit pages that already exist.
 *
 * @return void
 */
function verus_ensure_calendly_test_pages() {
	$parent_id = 0;
	$parent    = get_page_by_path( 'ai-services' );
	if ( $parent instanceof WP_Post ) {
		$parent_id = (int) $parent->ID;
	}

	foreach ( verus_calendly_test_catalog() as $slug => $page ) {
		$existing = get_posts( array(
			'name'             => $slug,
			'post_type'        => 'page',
			'post_status'      => 'any',
			'numberposts'      => 1,
			'suppress_filters' => true,
		) );
		if ( $existing ) {
			continue;
		}
		wp_insert_post( array(
			'post_title'     => $page['title'],
			'post_name'      => $slug,
			'post_status'    => 'publish',
			'post_type'      => 'page',
			'post_parent'    => $parent_id,
			'post_content'   => '',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => array(
				'_wp_page_template' => $page['template'],
			),
		), true );
	}
}

/**
 * Create the test pages once this version is running. Retries later if insert fails.
 *
 * @return void
 */
function verus_maybe_ensure_calendly_test_pages() {
	if ( get_option( 'verus_calendly_test_pages' ) === VERUS_VERSION ) {
		return;
	}
	if ( get_transient( 'verus_calendly_test_retry' ) ) {
		return;
	}
	verus_ensure_calendly_test_pages();
	if ( verus_calendly_test_pages_ready() ) {
		update_option( 'verus_calendly_test_pages', VERUS_VERSION );
		return;
	}
	set_transient( 'verus_calendly_test_retry', 1, 15 * MINUTE_IN_SECONDS );
}

/**
 * Landing assets, only on the test pages.
 *
 * @return void
 */
function verus_enqueue_calendly_landing() {
	if ( ! verus_current_calendly_test() ) {
		return;
	}
	wp_enqueue_style(
		'verus-landing-font',
		'https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap',
		array( 'verus-fonts' ),
		null
	);
	wp_enqueue_style(
		'verus-landing-calendly',
		VERUS_URI . '/assets/css/landing-calendly.css',
		array( 'verus-main' ),
		VERUS_VERSION
	);
	wp_enqueue_script(
		'verus-landing-calendly',
		VERUS_URI . '/assets/js/landing-calendly.js',
		array(),
		VERUS_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'verus_enqueue_calendly_landing' );

/**
 * Mark the body so the sticky mobile bar can clear the theme footer.
 *
 * @param array $classes Classes.
 * @return array
 */
function verus_calendly_landing_body_class( $classes ) {
	if ( verus_current_calendly_test() ) {
		$classes[] = 'v-lp-page';
	}
	return $classes;
}
add_filter( 'body_class', 'verus_calendly_landing_body_class' );

/**
 * Use the landing document title from the source HTML.
 *
 * @param string $title Current title.
 * @return string
 */
function verus_calendly_test_document_title( $title ) {
	$page = verus_current_calendly_test();
	if ( ! $page ) {
		return $title;
	}
	return $page['document_title'];
}
add_filter( 'pre_get_document_title', 'verus_calendly_test_document_title' );
add_filter( 'aioseo_title', 'verus_calendly_test_document_title' );

/**
 * PPC test pages stay out of the index.
 *
 * @param array $robots Robots directives.
 * @return array
 */
function verus_calendly_test_robots( $robots ) {
	if ( ! verus_current_calendly_test() ) {
		return $robots;
	}
	$robots['noindex'] = true;
	$robots['follow']  = true;
	return $robots;
}
add_filter( 'wp_robots', 'verus_calendly_test_robots' );

/**
 * Same noindex directive when AIOSEO owns the robots tag.
 *
 * @param array $attributes AIOSEO robots attributes.
 * @return array
 */
function verus_calendly_test_aioseo_robots( $attributes ) {
	if ( ! is_array( $attributes ) || ! verus_current_calendly_test() ) {
		return $attributes;
	}
	$attributes['noindex'] = 'noindex';
	if ( array_key_exists( 'nofollow', $attributes ) ) {
		$attributes['nofollow'] = '';
	}
	return $attributes;
}
add_filter( 'aioseo_robots_meta', 'verus_calendly_test_aioseo_robots' );

/**
 * Robots meta from the source HTML, in case another plugin removes wp_robots().
 *
 * @return void
 */
function verus_calendly_test_robots_tag() {
	if ( ! verus_current_calendly_test() ) {
		return;
	}
	echo "<meta name=\"robots\" content=\"noindex, follow\">\n";
}
add_action( 'wp_head', 'verus_calendly_test_robots_tag', 1 );
