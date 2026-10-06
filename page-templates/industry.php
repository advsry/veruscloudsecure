<?php
/**
 * Template Name: Industry page
 * Description: Vertical landing page using the Oracle-style layout.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();

$data = verus_service_data();

verus_render_hero( $data['hero'] );
verus_render_problem( $data['problem'] );
verus_render_capabilities( $data['caps'] );
verus_render_why( $data['why'] );
verus_render_stats( $data['stats'] );
verus_render_cta( $data['cta'] );
verus_render_faq( $data['faq'] );

$industries = get_page_by_path( 'industries' );
if ( $industries ) {
	verus_render_children( $industries->ID, __( 'Other industries', 'verus' ) );
}

get_footer();
