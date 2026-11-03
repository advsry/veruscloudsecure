<?php
/**
 * Informative Videos page: three-across grid and playback overlay.
 *
 * The Ninja Forms shortcode stays in the WordPress content. On this page only,
 * an empty form 5 is not printed, so visitors do not see "No Fields Found."
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * The client-resources/informative-videos page.
 *
 * @return bool
 */
function verus_is_informative_videos_page() {
	if ( is_admin() && ! wp_doing_ajax() ) {
		return false;
	}
	$post = get_queried_object();
	if ( ! ( $post instanceof WP_Post ) || 'page' !== $post->post_type || 'informative-videos' !== $post->post_name ) {
		return false;
	}
	if ( $post->post_parent ) {
		$parent = get_post( $post->post_parent );
		if ( $parent instanceof WP_Post && 'client-resources' !== $parent->post_name ) {
			return false;
		}
	}
	return true;
}

/**
 * Mark the page so the grid styles apply only here.
 *
 * @param array $classes Classes.
 * @return array
 */
function verus_informative_videos_body_class( $classes ) {
	if ( verus_is_informative_videos_page() ) {
		$classes[] = 'v-videos-page';
	}
	return $classes;
}
add_filter( 'body_class', 'verus_informative_videos_body_class' );

/**
 * Grid assets for this page only.
 *
 * @return void
 */
function verus_enqueue_informative_videos() {
	if ( ! verus_is_informative_videos_page() ) {
		return;
	}
	wp_enqueue_style(
		'verus-informative-videos',
		VERUS_URI . '/assets/css/informative-videos.css',
		array( 'verus-main' ),
		VERUS_VERSION
	);
	wp_enqueue_script(
		'verus-informative-videos',
		VERUS_URI . '/assets/js/informative-videos.js',
		array(),
		VERUS_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'verus_enqueue_informative_videos' );

/**
 * Do not print the empty assessment form on this page.
 *
 * The shortcode remains in the stored content. Form id 5 has no fields, and
 * Ninja Forms renders that as "No Fields Found."
 *
 * @param string $output Shortcode output.
 * @param string $tag    Shortcode name.
 * @param array  $attr   Shortcode attributes.
 * @return string
 */
function verus_suppress_informative_videos_form( $output, $tag, $attr ) {
	if ( ! verus_is_informative_videos_page() ) {
		return $output;
	}
	if ( 'ninja_form' !== $tag && 'ninja_forms' !== $tag ) {
		return $output;
	}
	$id = ( is_array( $attr ) && isset( $attr['id'] ) ) ? (string) $attr['id'] : '';
	if ( '5' === $id ) {
		return '';
	}
	return $output;
}
add_filter( 'do_shortcode_tag', 'verus_suppress_informative_videos_form', 10, 3 );

/**
 * Strip a saved "No Fields Found." fallback if the page HTML contains it
 * instead of a live shortcode.
 *
 * @param string $content Page content.
 * @return string
 */
function verus_informative_videos_content( $content ) {
	if ( ! verus_is_informative_videos_page() || ! is_string( $content ) ) {
		return $content;
	}
	$content = preg_replace( '/<noscript class="ninja-forms-noscript-message">.*?<\/noscript>/is', '', $content );
	$content = preg_replace( '/<p>\s*(?:<br\s*\/?>\s*)*No Fields Found\.\s*<\/p>/i', '', $content );
	$content = str_replace( 'No Fields Found.', '', $content );
	$content = preg_replace( '/<div id="nf-form-5-cont\b[^>]*>\s*<div class="nf-loading-spinner"><\/div>\s*<\/div>/is', '', $content );
	return $content;
}
add_filter( 'the_content', 'verus_informative_videos_content', 20 );
