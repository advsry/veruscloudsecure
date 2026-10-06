<?php
/**
 * Template Name: Service page
 * Description: Oracle-style lead-gen layout for a single service.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();

$data = verus_service_data();

verus_render_hero( $data['hero'] );
verus_render_embed( isset( $data['embed'] ) ? $data['embed'] : array() );
verus_render_problem( $data['problem'] );
verus_render_capabilities( $data['caps'] );
verus_render_why( $data['why'] );
verus_render_stats( $data['stats'] );
verus_render_cta( $data['cta'] );
verus_render_faq( $data['faq'] );

$parent = wp_get_post_parent_id( get_the_ID() );
if ( $parent ) {
	verus_render_children( $parent, __( 'Related services', 'verus' ) );
} else {
	verus_render_children( get_the_ID(), __( 'In this practice', 'verus' ) );
}

get_footer();
