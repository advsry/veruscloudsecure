<?php
/**
 * Template Name: About
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();

$data = verus_service_data();

verus_render_hero( $data['hero'] );
verus_render_stats( $data['stats'] );
verus_render_problem( $data['problem'] );
verus_render_capabilities( $data['caps'] );
verus_render_why( $data['why'] );
verus_render_faq( $data['faq'] );
verus_render_cta( $data['cta'] );

get_footer();
