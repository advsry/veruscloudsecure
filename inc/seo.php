<?php
/**
 * Default meta descriptions and social share image.
 * AIOSEO still owns the fields; these fill gaps and replace dumped page text.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Theme default meta descriptions keyed by page slug.
 *
 * @return array<string,string>
 */
function verus_meta_descriptions() {
	return array(
		'ai-services' => 'Verus helps non-technical business owners put AI to work — automation, AI agents, virtual receptionists, and secure private AI — backed by 24 years of managed IT and cybersecurity.',
	);
}

/**
 * AI-themed Open Graph image (replaces the 2024 cyber hero on share cards).
 *
 * @return string
 */
function verus_social_image_url() {
	return VERUS_URI . '/assets/images/og-ai.jpg';
}

/**
 * Current page slug for SEO helpers.
 *
 * @return string
 */
function verus_seo_slug() {
	if ( is_front_page() ) {
		return 'home';
	}
	if ( is_singular() ) {
		return (string) get_post_field( 'post_name', get_queried_object_id() );
	}
	return '';
}

/**
 * Default description for the current page, if we have one.
 *
 * @return string
 */
function verus_seo_default_description() {
	$slug = verus_seo_slug();
	$map  = verus_meta_descriptions();
	if ( $slug && isset( $map[ $slug ] ) ) {
		return $map[ $slug ];
	}
	$d = verus_defaults( $slug );
	if ( ! empty( $d['meta_description'] ) ) {
		return $d['meta_description'];
	}
	return '';
}

/**
 * Replace empty or dumped AIOSEO descriptions with the theme sentence.
 *
 * @param string $description Current description.
 * @return string
 */
function verus_filter_aioseo_description( $description ) {
	$ours = verus_seo_default_description();
	if ( ! $ours ) {
		return $description;
	}
	$description = is_string( $description ) ? trim( $description ) : '';
	if ( '' === $description || strlen( $description ) > 180 ) {
		return $ours;
	}
	return $description;
}
add_filter( 'aioseo_description', 'verus_filter_aioseo_description' );

/**
 * Prefer the AI share image on Home and AI Services.
 *
 * @param array $tags Facebook / Open Graph tags.
 * @return array
 */
function verus_filter_aioseo_facebook_tags( $tags ) {
	if ( ! is_array( $tags ) ) {
		return $tags;
	}
	$slug = verus_seo_slug();
	if ( in_array( $slug, array( 'home', 'ai-services' ), true ) ) {
		$tags['og:image'] = verus_social_image_url();
	}
	$ours = verus_seo_default_description();
	if ( $ours && ( empty( $tags['og:description'] ) || strlen( (string) $tags['og:description'] ) > 180 ) ) {
		$tags['og:description'] = $ours;
	}
	return $tags;
}
add_filter( 'aioseo_facebook_tags', 'verus_filter_aioseo_facebook_tags' );

/**
 * Match Twitter cards to the same share image.
 *
 * @param array $tags Twitter tags.
 * @return array
 */
function verus_filter_aioseo_twitter_tags( $tags ) {
	if ( ! is_array( $tags ) ) {
		return $tags;
	}
	$slug = verus_seo_slug();
	if ( in_array( $slug, array( 'home', 'ai-services' ), true ) ) {
		$tags['twitter:image'] = verus_social_image_url();
	}
	return $tags;
}
add_filter( 'aioseo_social_twitter_tags', 'verus_filter_aioseo_twitter_tags' );
add_filter( 'aioseo_twitter_tags', 'verus_filter_aioseo_twitter_tags' );

/**
 * Fallback meta tags when AIOSEO is not active.
 */
function verus_fallback_social_meta() {
	if ( function_exists( 'aioseo' ) ) {
		return;
	}
	$ours = verus_seo_default_description();
	if ( $ours ) {
		echo '<meta name="description" content="' . esc_attr( $ours ) . '">' . "\n";
	}

	$slug = verus_seo_slug();
	if ( in_array( $slug, array( 'home', 'ai-services' ), true ) ) {
		$img = verus_social_image_url();
		echo '<meta property="og:image" content="' . esc_url( $img ) . '">' . "\n";
		echo '<meta name="twitter:image" content="' . esc_url( $img ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'verus_fallback_social_meta', 4 );
