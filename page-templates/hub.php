<?php
/**
 * Template Name: Hub page
 * Description: Category landing (Services, AI, Cyber, Managed IT, Industries, Resources).
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();

$data = verus_service_data();

verus_render_hero( $data['hero'] );
verus_render_problem( $data['problem'] );
verus_render_capabilities( $data['caps'] );
verus_render_proof( $data['proof'] );
verus_render_why( $data['why'] );
verus_render_stats( $data['stats'] );
verus_render_cta( $data['cta'] );
verus_render_faq( $data['faq'] );
verus_render_children( get_the_ID(), __( 'Explore', 'verus' ) );

get_footer();
