<?php
/**
 * ACF Free field groups (no Repeaters / Flexible Content / Options).
 * Numbered Group fields stand in for repeaters. Global settings live in the Customizer.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register local field groups when ACF is present.
 */
function verus_acf_register() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	verus_acf_group_service();
	verus_acf_group_home();
	verus_acf_group_contact();
	verus_acf_group_menu();
}
add_action( 'acf/init', 'verus_acf_register' );

/**
 * Numbered group fields for ACF free.
 *
 * @param string $prefix    Field name prefix.
 * @param string $label     Human label.
 * @param int    $count     How many slots.
 * @param array  $sub       Sub field defs (without keys).
 * @param string $key_base  Unique key base.
 * @return array
 */
function verus_acf_repeat( $prefix, $label, $count, $sub, $key_base ) {
	$fields = array();
	for ( $i = 1; $i <= $count; $i++ ) {
		$subs = array();
		foreach ( $sub as $s ) {
			$subs[] = array_merge(
				$s,
				array(
					'key'  => $key_base . '_' . $prefix . '_' . $i . '_' . $s['name'],
					'name' => $s['name'],
				)
			);
		}
		$fields[] = array(
			'key'        => $key_base . '_' . $prefix . '_' . $i,
			'label'      => $label . ' ' . $i,
			'name'       => $prefix . '_' . $i,
			'type'       => 'group',
			'layout'     => 'block',
			'sub_fields' => $subs,
		);
	}
	return $fields;
}

/**
 * Flat numbered fields (ACF Group fields often fail to save with Gutenberg).
 *
 * @param string $prefix   Name prefix, e.g. pillar.
 * @param string $label    Human label.
 * @param int    $count    How many slots.
 * @param array  $sub      Sub field defs (without keys).
 * @param string $key_base Unique key base.
 * @return array
 */
function verus_acf_repeat_flat( $prefix, $label, $count, $sub, $key_base ) {
	$fields = array();
	for ( $i = 1; $i <= $count; $i++ ) {
		$fields[] = array(
			'key'     => $key_base . '_' . $prefix . '_' . $i . '_msg',
			'label'   => $label . ' ' . $i,
			'name'    => '',
			'type'    => 'message',
			'message' => '',
		);
		foreach ( $sub as $s ) {
			$fields[] = array_merge(
				$s,
				array(
					'key'  => $key_base . '_' . $prefix . '_' . $i . '_' . $s['name'],
					'name' => $prefix . '_' . $i . '_' . $s['name'],
				)
			);
		}
	}
	return $fields;
}

/**
 * Link field that accepts https:// URLs and site paths like /ai-services/.
 * ACF's native "url" type rejects relative paths and can block the whole save.
 *
 * @param string $label Label.
 * @param string $name  Field name.
 * @return array
 */
function verus_acf_link_sub( $label, $name ) {
	return array(
		'label'        => $label,
		'name'         => $name,
		'type'         => 'text',
		'instructions' => 'Full URL (https://…) or a site path (/ai-services/).',
		'placeholder'  => '/page-slug/',
	);
}

/**
 * Allow relative, tel:, and mailto: values if any URL-type fields remain.
 *
 * @param mixed  $valid Validation result.
 * @param mixed  $value Field value.
 * @param array  $field Field config.
 * @param string $input Input name.
 * @return mixed
 */
function verus_acf_allow_relative_url( $valid, $value, $field, $input ) {
	if ( true !== $valid || '' === $value || null === $value ) {
		return $valid;
	}
	if ( '/' === substr( (string) $value, 0, 1 ) ) {
		return true;
	}
	if ( 0 === strpos( (string) $value, 'tel:' ) || 0 === strpos( (string) $value, 'mailto:' ) ) {
		return true;
	}
	return $valid;
}
add_filter( 'acf/validate_value/type=url', 'verus_acf_allow_relative_url', 10, 4 );

/**
 * Tab helper.
 *
 * @param string $key   Field key.
 * @param string $label Tab label.
 * @return array
 */
function verus_acf_tab( $key, $label ) {
	return array(
		'key'   => $key,
		'label' => $label,
		'name'  => '',
		'type'  => 'tab',
	);
}

/**
 * Service / industry / hub field group.
 */
function verus_acf_group_service() {
	$title_text = array(
		array( 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
		array( 'label' => 'Text', 'name' => 'text', 'type' => 'textarea', 'rows' => 3 ),
		array(
			'label'   => 'Icon',
			'name'    => 'icon',
			'type'    => 'select',
			'choices' => array(
				'shield'   => 'Shield',
				'migrate'  => 'Migrate',
				'gauge'    => 'Gauge',
				'database' => 'Database',
				'cluster'  => 'Cluster',
				'doc'      => 'Document',
				'star'     => 'Star',
				'lock'     => 'Lock',
				'cloud'    => 'Cloud',
				'network'  => 'Network',
				'phone'    => 'Phone',
				'users'    => 'Users',
				'bolt'     => 'Bolt',
				'chart'    => 'Chart',
				'headset'  => 'Headset',
				'building' => 'Building',
				'heart'    => 'Heart',
				'factory'  => 'Factory',
				'ai'       => 'AI',
				'check'    => 'Check',
				'mail'     => 'Mail',
			),
			'allow_null' => 1,
		),
	);

	$fields = array_merge(
		array( verus_acf_tab( 'field_v_tab_hero', 'Hero' ) ),
		array(
			array( 'key' => 'field_v_hero_eyebrow', 'label' => 'Eyebrow', 'name' => 'hero_eyebrow', 'type' => 'text' ),
			array( 'key' => 'field_v_hero_title', 'label' => 'H1 (leave blank to use page title)', 'name' => 'hero_title', 'type' => 'text' ),
			array( 'key' => 'field_v_hero_sub', 'label' => 'Subhead', 'name' => 'hero_sub', 'type' => 'text' ),
			array( 'key' => 'field_v_hero_answer', 'label' => 'Answer paragraph (lead copy)', 'name' => 'hero_answer', 'type' => 'textarea', 'rows' => 4 ),
			array( 'key' => 'field_v_hero_image', 'label' => 'Hero background image', 'name' => 'hero_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
			array( 'key' => 'field_v_hero_primary_label', 'label' => 'Primary button label', 'name' => 'hero_primary_label', 'type' => 'text' ),
			array_merge( array( 'key' => 'field_v_hero_primary_url' ), verus_acf_link_sub( 'Primary button URL', 'hero_primary_url' ) ),
			array( 'key' => 'field_v_hero_secondary_label', 'label' => 'Secondary button label', 'name' => 'hero_secondary_label', 'type' => 'text' ),
			array_merge( array( 'key' => 'field_v_hero_secondary_url' ), verus_acf_link_sub( 'Secondary button URL', 'hero_secondary_url' ) ),
			array( 'key' => 'field_v_form_eyebrow', 'label' => 'Form eyebrow', 'name' => 'form_eyebrow', 'type' => 'text' ),
			array( 'key' => 'field_v_form_title', 'label' => 'Form heading', 'name' => 'form_title', 'type' => 'text' ),
			array( 'key' => 'field_v_form_lede', 'label' => 'Form lede', 'name' => 'form_lede', 'type' => 'textarea', 'rows' => 2 ),
			array( 'key' => 'field_v_form_shortcode', 'label' => 'Form shortcode (shown under the hero)', 'name' => 'form_shortcode', 'type' => 'text', 'placeholder' => "[ninja_form id='8']" ),
		),
		verus_acf_repeat( 'trust', 'Trust item', 3, array(
			array( 'label' => 'Label', 'name' => 'title', 'type' => 'text' ),
		), 'field_v' ),
		array( verus_acf_tab( 'field_v_tab_problem', 'The Risk' ) ),
		array(
			array( 'key' => 'field_v_problem_eyebrow', 'label' => 'Eyebrow', 'name' => 'problem_eyebrow', 'type' => 'text' ),
			array( 'key' => 'field_v_problem_title', 'label' => 'Heading', 'name' => 'problem_title', 'type' => 'text' ),
			array( 'key' => 'field_v_problem_lede', 'label' => 'Lede', 'name' => 'problem_lede', 'type' => 'textarea', 'rows' => 3 ),
		),
		verus_acf_repeat( 'pain', 'Risk card', 6, array_merge( $title_text, array(
			verus_acf_link_sub( 'Optional link', 'url' ),
		) ), 'field_v' ),
		array( verus_acf_tab( 'field_v_tab_caps', 'Capabilities' ) ),
		array(
			array( 'key' => 'field_v_caps_eyebrow', 'label' => 'Eyebrow', 'name' => 'caps_eyebrow', 'type' => 'text' ),
			array( 'key' => 'field_v_caps_title', 'label' => 'Heading', 'name' => 'caps_title', 'type' => 'text' ),
			array( 'key' => 'field_v_caps_lede', 'label' => 'Lede', 'name' => 'caps_lede', 'type' => 'textarea', 'rows' => 3 ),
		),
		verus_acf_repeat( 'cap', 'Capability', 8, array_merge( $title_text, array(
			verus_acf_link_sub( 'Optional link', 'url' ),
			array( 'label' => 'Featured (full-width band)', 'name' => 'featured', 'type' => 'true_false', 'ui' => 1 ),
			array( 'label' => 'Featured tag', 'name' => 'tag', 'type' => 'text' ),
		) ), 'field_v' ),
		array( verus_acf_tab( 'field_v_tab_why', 'Why Verus' ) ),
		array(
			array( 'key' => 'field_v_why_eyebrow', 'label' => 'Eyebrow', 'name' => 'why_eyebrow', 'type' => 'text' ),
			array( 'key' => 'field_v_why_title', 'label' => 'Heading', 'name' => 'why_title', 'type' => 'text' ),
		),
		verus_acf_repeat( 'why', 'Differentiator', 4, array(
			array( 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
			array( 'label' => 'Text', 'name' => 'text', 'type' => 'textarea', 'rows' => 4 ),
		), 'field_v' ),
		array( verus_acf_tab( 'field_v_tab_stats', 'Stats & CTA' ) ),
		verus_acf_repeat( 'stat', 'Stat', 4, array(
			array( 'label' => 'Metric', 'name' => 'metric', 'type' => 'text' ),
			array( 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
		), 'field_v' ),
		array(
			array( 'key' => 'field_v_cta_title', 'label' => 'CTA heading', 'name' => 'cta_title', 'type' => 'text' ),
			array( 'key' => 'field_v_cta_text', 'label' => 'CTA text', 'name' => 'cta_text', 'type' => 'textarea', 'rows' => 3 ),
			array( 'key' => 'field_v_cta_label', 'label' => 'CTA button label', 'name' => 'cta_label', 'type' => 'text' ),
			array_merge( array( 'key' => 'field_v_cta_url' ), verus_acf_link_sub( 'CTA button URL', 'cta_url' ) ),
			array( 'key' => 'field_v_cta_secondary_label', 'label' => 'CTA secondary button label', 'name' => 'cta_secondary_label', 'type' => 'text' ),
			array_merge( array( 'key' => 'field_v_cta_secondary_url' ), verus_acf_link_sub( 'CTA secondary button URL', 'cta_secondary_url' ) ),
			array( 'key' => 'field_v_cta_note', 'label' => 'CTA note', 'name' => 'cta_note', 'type' => 'text' ),
		),
		array( verus_acf_tab( 'field_v_tab_proof', 'Proof' ) ),
		array(
			array( 'key' => 'field_v_proof_eyebrow', 'label' => 'Eyebrow', 'name' => 'proof_eyebrow', 'type' => 'text' ),
			array( 'key' => 'field_v_proof_title', 'label' => 'Heading', 'name' => 'proof_title', 'type' => 'text' ),
			array( 'key' => 'field_v_proof_metric', 'label' => 'Metric', 'name' => 'proof_metric', 'type' => 'text' ),
			array( 'key' => 'field_v_proof_label', 'label' => 'Metric label', 'name' => 'proof_label', 'type' => 'text' ),
			array( 'key' => 'field_v_proof_text', 'label' => 'Story', 'name' => 'proof_text', 'type' => 'textarea', 'rows' => 4 ),
			array( 'key' => 'field_v_proof_note', 'label' => 'Caption', 'name' => 'proof_note', 'type' => 'text' ),
		),
		array( verus_acf_tab( 'field_v_tab_faq', 'FAQ' ) ),
		array(
			array( 'key' => 'field_v_faq_eyebrow', 'label' => 'Eyebrow', 'name' => 'faq_eyebrow', 'type' => 'text' ),
			array( 'key' => 'field_v_faq_title', 'label' => 'Heading', 'name' => 'faq_title', 'type' => 'text' ),
		),
		verus_acf_repeat( 'faq', 'FAQ', 8, array(
			array( 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
			array( 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea', 'rows' => 4 ),
		), 'field_v' )
	);

	acf_add_local_field_group( array(
		'key'      => 'group_verus_service',
		'title'    => 'Verus — Page sections (lead-gen layout)',
		'fields'   => $fields,
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/service.php' ) ),
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/industry.php' ) ),
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/hub.php' ) ),
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/about.php' ) ),
		),
		'menu_order' => 0,
		'position'   => 'normal',
		'style'      => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'description' => 'Leave a field blank to use the theme’s default copy for this page. SEO titles and meta are handled by AIOSEO.',
	) );
}

/**
 * Homepage-only extras (pillars, AAIM, testimonials).
 */
function verus_acf_group_home() {
	$card = array(
		array( 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
		array( 'label' => 'Text', 'name' => 'text', 'type' => 'textarea', 'rows' => 3 ),
		verus_acf_link_sub( 'URL', 'url' ),
		array(
			'label'      => 'Icon',
			'name'       => 'icon',
			'type'       => 'select',
			'choices'    => array(
				'ai'       => 'AI',
				'lock'     => 'Lock',
				'headset'  => 'Headset',
				'database' => 'Database',
				'shield'   => 'Shield',
				'cloud'    => 'Cloud',
				'bolt'     => 'Bolt',
				'users'    => 'Users',
				'star'     => 'Star',
			),
			'allow_null' => 1,
		),
	);

	acf_add_local_field_group( array(
		'key'    => 'group_verus_home_flat',
		'title'  => 'Verus — Home extras',
		'fields' => array_merge(
			array( verus_acf_tab( 'field_vh_tab_hero', 'Hero' ) ),
			array(
				array( 'key' => 'field_vh_hero_eyebrow', 'label' => 'Eyebrow', 'name' => 'hero_eyebrow', 'type' => 'text' ),
				array( 'key' => 'field_vh_hero_title', 'label' => 'H1', 'name' => 'hero_title', 'type' => 'text' ),
				array( 'key' => 'field_vh_hero_sub', 'label' => 'Subhead', 'name' => 'hero_sub', 'type' => 'text' ),
				array( 'key' => 'field_vh_hero_answer', 'label' => 'Answer paragraph', 'name' => 'hero_answer', 'type' => 'textarea', 'rows' => 4 ),
				array( 'key' => 'field_vh_hero_primary_label', 'label' => 'Primary button label', 'name' => 'hero_primary_label', 'type' => 'text' ),
				array_merge( array( 'key' => 'field_vh_hero_primary_url' ), verus_acf_link_sub( 'Primary button URL', 'hero_primary_url' ) ),
				array( 'key' => 'field_vh_hero_secondary_label', 'label' => 'Secondary button label', 'name' => 'hero_secondary_label', 'type' => 'text' ),
				array_merge( array( 'key' => 'field_vh_hero_secondary_url' ), verus_acf_link_sub( 'Secondary button URL', 'hero_secondary_url' ) ),
			),
			array( verus_acf_tab( 'field_vh_tab_pillars', 'Pillars' ) ),
			array(
				array( 'key' => 'field_vh_pillars_eyebrow', 'label' => 'Eyebrow', 'name' => 'pillars_eyebrow', 'type' => 'text' ),
				array( 'key' => 'field_vh_pillars_title', 'label' => 'Heading', 'name' => 'pillars_title', 'type' => 'text' ),
				array( 'key' => 'field_vh_pillars_lede', 'label' => 'Lede', 'name' => 'pillars_lede', 'type' => 'textarea', 'rows' => 2 ),
			),
			verus_acf_repeat_flat( 'pillar', 'Pillar', 4, $card, 'field_vh' ),
			array( verus_acf_tab( 'field_vh_tab_aaim', 'A.A.I.M.' ) ),
			array(
				array( 'key' => 'field_vh_aaim_eyebrow', 'label' => 'Eyebrow', 'name' => 'aaim_eyebrow', 'type' => 'text' ),
				array( 'key' => 'field_vh_aaim_title', 'label' => 'Heading', 'name' => 'aaim_title', 'type' => 'text' ),
				array( 'key' => 'field_vh_aaim_lede', 'label' => 'Lede', 'name' => 'aaim_lede', 'type' => 'textarea', 'rows' => 2 ),
			),
			verus_acf_repeat_flat( 'aaim', 'Step', 4, array(
				array( 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
				array( 'label' => 'Text', 'name' => 'text', 'type' => 'textarea', 'rows' => 3 ),
			), 'field_vh' ),
			array( verus_acf_tab( 'field_vh_tab_t', 'Testimonials' ) ),
			array(
				array( 'key' => 'field_vh_t_eyebrow', 'label' => 'Eyebrow', 'name' => 'testimonials_eyebrow', 'type' => 'text' ),
				array( 'key' => 'field_vh_t_title', 'label' => 'Heading', 'name' => 'testimonials_title', 'type' => 'text' ),
			),
			verus_acf_repeat_flat( 'testimonial', 'Testimonial', 6, array(
				array( 'label' => 'Attribution / industry', 'name' => 'title', 'type' => 'text' ),
				array( 'label' => 'Quote', 'name' => 'text', 'type' => 'textarea', 'rows' => 4 ),
			), 'field_vh' )
		),
		'location' => array(
			array( array( 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ) ),
		),
		'menu_order' => 0,
		'position'   => 'acf_after_title',
		'style'      => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'description' => 'Homepage fields only. Leave a field blank to use the theme default. URLs can be a site path such as /ai-services/.',
	) );
}

/**
 * Contact extras.
 */
function verus_acf_group_contact() {
	acf_add_local_field_group( array(
		'key'    => 'group_verus_contact',
		'title'  => 'Verus — Contact',
		'fields' => array(
			array( 'key' => 'field_vc_form_note', 'label' => 'Form intro', 'name' => 'form_intro', 'type' => 'textarea', 'rows' => 3 ),
			array( 'key' => 'field_vc_form_shortcode', 'label' => 'Form shortcode (optional if using the Contact Form widget area)', 'name' => 'form_shortcode', 'type' => 'text' ),
			array( 'key' => 'field_vc_accounting_email', 'label' => 'Accounting email', 'name' => 'accounting_email', 'type' => 'email' ),
			array( 'key' => 'field_vc_experts_email', 'label' => 'Experts email', 'name' => 'experts_email', 'type' => 'email' ),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/contact.php' ) ),
		),
	) );
}

/**
 * Menu item blurb (in addition to native Description).
 */
function verus_acf_group_menu() {
	acf_add_local_field_group( array(
		'key'    => 'group_verus_menu',
		'title'  => 'Mega menu',
		'fields' => array(
			array(
				'key'   => 'field_vm_blurb',
				'label' => 'Mega menu blurb',
				'name'  => 'mega_blurb',
				'type'  => 'text',
				'instructions' => 'One-line description shown under the link in the mega menu. The native Description field is used if this is empty.',
			),
		),
		'location' => array(
			array( array( 'param' => 'nav_menu_item', 'operator' => '==', 'value' => 'all' ) ),
		),
	) );
}

/**
 * Admin notice if ACF is missing.
 */
function verus_acf_notice() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	if ( ! current_user_can( 'install_plugins' ) ) {
		return;
	}
	echo '<div class="notice notice-warning"><p>';
	echo esc_html__( 'Verus theme: install the free Advanced Custom Fields plugin to edit page sections in the dashboard. Default copy still displays without it. SEO remains in AIOSEO.', 'verus' );
	echo '</p></div>';
}
add_action( 'admin_notices', 'verus_acf_notice' );

/**
 * Turn off a database copy of the old Home extras group so it cannot
 * overwrite the PHP field group on save.
 *
 * @param array $group Field group.
 * @return array
 */
function verus_acf_deactivate_stale_groups( $group ) {
	if ( empty( $group['key'] ) || 'group_verus_home' !== $group['key'] ) {
		return $group;
	}
	$local = isset( $group['local'] ) ? $group['local'] : '';
	if ( 'php' !== $local ) {
		$group['active'] = 0;
	}
	return $group;
}
add_filter( 'acf/load_field_group', 'verus_acf_deactivate_stale_groups' );
