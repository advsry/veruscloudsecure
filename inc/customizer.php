<?php
/**
 * Customizer: site-wide lead-gen and contact settings.
 * (ACF free has no Options page, so global settings live here.)
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function verus_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'verus_lead', array(
		'title'       => __( 'Verus — Lead Generation', 'verus' ),
		'priority'    => 30,
		'description' => __( 'Global meeting, contact, and header/footer settings. Page copy is edited with Advanced Custom Fields on each page.', 'verus' ),
	) );

	$fields = array(
		'meeting_url'     => array( 'label' => __( 'Book a Meeting URL', 'verus' ), 'default' => 'https://calendly.com/tamra-veruscloudsecure/new-meeting', 'type' => 'url' ),
		'meeting_label'   => array( 'label' => __( 'Book a Meeting button label', 'verus' ), 'default' => 'Book A Meeting', 'type' => 'text' ),
		'phone'           => array( 'label' => __( 'Phone', 'verus' ), 'default' => '1-800-958-3787', 'type' => 'text' ),
		'email'           => array( 'label' => __( 'Email', 'verus' ), 'default' => 'info@veruscloudsecure.com', 'type' => 'email' ),
		'offices'         => array( 'label' => __( 'Office locations', 'verus' ), 'default' => 'Philadelphia · Chicago', 'type' => 'text' ),
		'assessment_url'  => array( 'label' => __( 'AI Maturity Assessment URL', 'verus' ), 'default' => '/ai-maturity-assessment/', 'type' => 'text' ),
		'facebook'        => array( 'label' => __( 'Facebook URL', 'verus' ), 'default' => 'https://www.facebook.com/veruscloudsecure/', 'type' => 'url' ),
		'linkedin'        => array( 'label' => __( 'LinkedIn URL', 'verus' ), 'default' => '', 'type' => 'url' ),
		'footer_blurb'    => array( 'label' => __( 'Footer blurb', 'verus' ), 'default' => 'Since 2002, Verus has been the senior-led partner for cybersecurity, managed IT, and AI — keeping mid-sized organizations secure and running.', 'type' => 'textarea' ),
		'ticket_portal'   => array( 'label' => __( 'IT Ticket Portal URL', 'verus' ), 'default' => '', 'type' => 'url' ),
	);

	foreach ( $fields as $key => $field ) {
		$wp_customize->add_setting( 'verus_' . $key, array(
			'default'           => $field['default'],
			'sanitize_callback' => 'url' === $field['type'] ? 'esc_url_raw' : ( 'textarea' === $field['type'] ? 'sanitize_textarea_field' : 'sanitize_text_field' ),
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( 'verus_' . $key, array(
			'label'   => $field['label'],
			'section' => 'verus_lead',
			'type'    => $field['type'],
		) );
	}
}
add_action( 'customize_register', 'verus_customize_register' );
