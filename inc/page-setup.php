<?php
/**
 * Native WP menu seeder + template assignment for existing slugs.
 *
 * Does not overwrite existing pages. Safe to run on the live site after
 * activating this theme in place of Pro.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * After switch: assign templates, seed menus if empty.
 */
function verus_after_switch() {
	verus_ensure_calendly_test_pages();
	if ( verus_calendly_test_pages_ready() ) {
		update_option( 'verus_calendly_test_pages', VERUS_VERSION );
	}
	verus_assign_templates();
	verus_seed_menus();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'verus_after_switch' );

/**
 * Re-assign templates when the theme version changes (uploads do not fire after_switch_theme).
 */
function verus_maybe_assign_templates() {
	verus_maybe_ensure_calendly_test_pages();
	$done = get_option( 'verus_templates_version' );
	if ( $done === VERUS_VERSION ) {
		return;
	}
	verus_assign_templates();
	update_option( 'verus_templates_version', VERUS_VERSION, false );
}
add_action( 'init', 'verus_maybe_assign_templates', 20 );

/**
 * Known slugs → layout templates so leftover builder pages cannot fall back to page.php.
 *
 * @return array<string,string>
 */
function verus_template_map() {
	return array(
		'who-is-verus'                       => 'page-templates/about.php',
		'contact'                            => 'page-templates/contact.php',
		'book-a-meeting'                     => 'page-templates/book-meeting.php',
		'services'                           => 'page-templates/hub.php',
		'ai-services'                        => 'page-templates/hub.php',
		'cybersecurity'                      => 'page-templates/hub.php',
		'managed-it'                         => 'page-templates/hub.php',
		'consulting-services'                => 'page-templates/hub.php',
		'industries'                         => 'page-templates/hub.php',
		'client-resources'                   => 'page-templates/hub.php',
		'database-management'                => 'page-templates/service.php',
		'oracle-solutions'                   => 'page-templates/service.php',
		'cloud-hosting'                      => 'page-templates/service.php',
		'application-based-calling'          => 'page-templates/service.php',
		'cybersecurity-and-compliance'       => 'page-templates/service.php',
		'cybersecurity-insurance-compliance' => 'page-templates/service.php',
		'multi-factor-authentication'        => 'page-templates/service.php',
		'penetration-testing'                => 'page-templates/service.php',
		'phishing-solutions-and-exercises'   => 'page-templates/service.php',
		'free-cybersecurity-assessment'      => 'page-templates/service.php',
		'ai-training-curriculum'             => 'page-templates/service.php',
		'digital-customer-assistants'        => 'page-templates/service.php',
		'employee-ai-agents'                 => 'page-templates/service.php',
		'instant-business-intelligence'      => 'page-templates/service.php',
		'private-ai-governance'              => 'page-templates/service.php',
		'smart-task-automation'              => 'page-templates/service.php',
		// Test Calendly landings. Live slugs above stay on the service template.
		'private-ai-governance-test'         => 'page-templates/private-ai-governance-calendly.php',
		'smart-task-automation-test'         => 'page-templates/ai-automation-calendly.php',
		'virtual-ai-employees'               => 'page-templates/service.php',
		'ai-maturity-assessment'             => 'page-templates/service.php',
		'healthcare-it-services'             => 'page-templates/industry.php',
		'non-profits'                        => 'page-templates/industry.php',
		'automotive-it-support'              => 'page-templates/industry.php',
		'financial-it-services'              => 'page-templates/industry.php',
		'energy-it-services'                 => 'page-templates/industry.php',
		'hospitality'                        => 'page-templates/industry.php',
		'insurance'                          => 'page-templates/industry.php',
		'it-support-for-manufacturing'       => 'page-templates/industry.php',
	);
}

/**
 * Publish /book-a-meeting/ if it does not exist yet.
 */
function verus_ensure_book_meeting_page() {
	$existing = get_page_by_path( 'book-a-meeting' );
	if ( $existing ) {
		return;
	}
	$id = wp_insert_post( array(
		'post_title'  => __( 'Book a Meeting', 'verus' ),
		'post_name'   => 'book-a-meeting',
		'post_status' => 'publish',
		'post_type'   => 'page',
		'post_content'=> '',
	), true );
	if ( is_wp_error( $id ) || ! $id ) {
		return;
	}
	update_post_meta( (int) $id, '_wp_page_template', 'page-templates/book-meeting.php' );
}

/**
 * EULA body HTML used when creating /eula/ and as a fallback if the page is empty.
 *
 * @return string
 */
function verus_eula_html() {
	$privacy = esc_url( home_url( '/privacy-policy/' ) );
	$email   = esc_html( verus_opt( 'email', 'info@veruscloudsecure.com' ) );
	$mailto  = esc_url( 'mailto:' . verus_opt( 'email', 'info@veruscloudsecure.com' ) );

	return '<p><strong>Effective:</strong> October 8, 2026</p>
<p>This End-User License Agreement ("Agreement") governs use of software applications developed and operated by Verus Cloud Secure ("Verus," "we," "us"), including applications that connect to third-party services such as Intuit QuickBooks Online and ConnectWise (the "Applications").</p>
<h2>1. Internal Use Only</h2>
<p>The Applications are private, internal tools used solely by Verus and its authorized personnel. They are not offered, sold, or distributed to the public.</p>
<h2>2. License</h2>
<p>Verus grants authorized users a limited, non-exclusive, non-transferable, revocable license to use the Applications for Verus business purposes only. Users may not copy, modify, reverse engineer, sublicense, or distribute the Applications.</p>
<h2>3. Third-Party Data Access</h2>
<p>When connected to a third-party service, the Applications access only the data the account administrator authorizes through that service\'s standard authorization process (e.g., OAuth 2.0). Data is used only to provide the Applications\' functions, such as reporting and answering questions about Verus business records. We do not sell, rent, or share this data with outside parties.</p>
<h2>4. Data Security</h2>
<p>Credentials and data are stored on Verus-controlled infrastructure using industry-standard security measures, including encryption in transit and restricted access.</p>
<h2>5. Disconnection</h2>
<p>An administrator may disconnect any Application from a third-party service at any time, either within the Application or from the third-party service\'s connected-apps settings. Upon disconnection, the Application\'s access stops and stored access tokens are deleted.</p>
<h2>6. Privacy</h2>
<p>Use of the Applications is also governed by our <a href="' . $privacy . '">Privacy Policy</a>.</p>
<h2>7. No Warranty</h2>
<p>The Applications are provided "as is" without warranties of any kind, express or implied, including warranties of merchantability or fitness for a particular purpose.</p>
<h2>8. Limitation of Liability</h2>
<p>To the fullest extent permitted by law, Verus is not liable for any indirect, incidental, special, or consequential damages arising from use of the Applications.</p>
<h2>9. Termination</h2>
<p>Verus may suspend or end any user\'s access at any time. Sections 3 through 8 survive termination.</p>
<h2>10. Governing Law</h2>
<p>This Agreement is governed by the laws of the Commonwealth of Pennsylvania. Disputes shall be brought in the state or federal courts of Delaware County or Montgomery County, Pennsylvania.</p>
<h2>11. Changes</h2>
<p>We may update this Agreement at any time by posting a revised version on this page.</p>
<h2>12. Contact</h2>
<p>Questions: <a href="' . $mailto . '">' . $email . '</a></p>';
}

/**
 * Publish /eula/ if it does not exist yet.
 */
function verus_ensure_eula_page() {
	$html     = verus_eula_html();
	$existing = get_page_by_path( 'eula' );
	if ( $existing ) {
		if ( $existing->post_content !== $html ) {
			wp_update_post( array(
				'ID'           => $existing->ID,
				'post_content' => $html,
			) );
		}
		return;
	}
	wp_insert_post( array(
		'post_title'   => __( 'End-User License Agreement (EULA)', 'verus' ),
		'post_name'    => 'eula',
		'post_status'  => 'publish',
		'post_type'    => 'page',
		'post_content' => $html,
	), true );
}

/**
 * Map known slugs to page templates.
 */
function verus_assign_templates() {
	verus_ensure_book_meeting_page();
	verus_ensure_eula_page();
	foreach ( verus_template_map() as $slug => $template ) {
		$pages = get_posts( array(
			'name'        => $slug,
			'post_type'   => 'page',
			'post_status' => 'any',
			'numberposts' => 1,
		) );
		if ( $pages ) {
			update_post_meta( $pages[0]->ID, '_wp_page_template', $template );
		}
	}

	$front = (int) get_option( 'page_on_front' );
	if ( $front ) {
		update_post_meta( $front, '_wp_page_template', 'default' );
	}
}

/**
 * Force the layout template even if a page still has the default template assigned.
 *
 * @param string $template Absolute template path.
 * @return string
 */
function verus_force_layout_template( $template ) {
	if ( ! is_page() ) {
		return $template;
	}
	$slug = get_post_field( 'post_name', get_queried_object_id() );
	$map  = verus_template_map();
	if ( empty( $map[ $slug ] ) ) {
		return $template;
	}
	$file = VERUS_DIR . '/' . $map[ $slug ];
	return file_exists( $file ) ? $file : $template;
}
add_filter( 'template_include', 'verus_force_layout_template', 99 );

/**
 * Create Primary + footer menus when none exist.
 */
function verus_seed_menus() {
	if ( wp_get_nav_menu_object( 'Primary' ) ) {
		return;
	}

	$primary_id = wp_create_nav_menu( 'Primary' );
	$home       = home_url( '/' );

	$structure = array(
		array( 'title' => 'Home', 'url' => $home ),
		array( 'title' => 'Who is Verus', 'url' => $home . 'home/who-is-verus/' ),
		array(
			'title'    => 'Services',
			'url'      => $home . 'services/',
			'children' => array(
				array(
					'title'       => 'AI Services',
					'url'         => $home . 'ai-services/',
					'description' => 'Put AI to work without putting data at risk.',
					'children'    => array(
						array( 'title' => 'Virtual AI Employees', 'url' => $home . 'ai-services/virtual-ai-employees/', 'description' => 'Replace a role. Digital workers that run 24/7.' ),
						array( 'title' => 'Private AI Governance', 'url' => $home . 'ai-services/private-ai-governance/', 'description' => 'Insurance-ready private AI — before you buy anything else.' ),
						array( 'title' => 'Smart Task Automation', 'url' => $home . 'ai-services/smart-task-automation/', 'description' => 'Connect apps. Eliminate busywork.' ),
						array( 'title' => 'Digital Customer Assistants', 'url' => $home . 'ai-services/digital-customer-assistants/', 'description' => 'Replace the desk phone. Voice and chat that books meetings.' ),
						array( 'title' => 'Instant Business Intelligence', 'url' => $home . 'ai-services/instant-business-intelligence/', 'description' => 'Talk to your data in plain English.' ),
						array( 'title' => 'Employee AI Agents', 'url' => $home . 'ai-services/employee-ai-agents/', 'description' => 'Augment a person. Sidekicks trained on your policies.' ),
						array( 'title' => 'AI Training Curriculum', 'url' => $home . 'ai-services/ai-training-curriculum/', 'description' => 'Prompting, safety, and team workshops.' ),
						array( 'title' => 'AI Maturity Assessment', 'url' => $home . 'ai-maturity-assessment/', 'description' => 'Get your score in minutes.' ),
					),
				),
				array(
					'title'       => 'Cybersecurity',
					'url'         => $home . 'cybersecurity/',
					'description' => 'Protect the business while you adopt AI.',
					'children'    => array(
						array( 'title' => 'Cybersecurity & Compliance', 'url' => $home . 'cybersecurity/cybersecurity-and-compliance/', 'description' => 'Audit trails, monitoring, reporting.' ),
						array( 'title' => 'Insurance Compliance', 'url' => $home . 'cybersecurity/cybersecurity-insurance-compliance/', 'description' => 'Meet carrier requirements before renewal.' ),
						array( 'title' => 'Multi-Factor Authentication', 'url' => $home . 'cybersecurity/multi-factor-authentication/', 'description' => 'Stop credential-stuffing attacks.' ),
						array( 'title' => 'Penetration Testing', 'url' => $home . 'cybersecurity/penetration-testing/', 'description' => 'Find the holes before attackers do.' ),
						array( 'title' => 'Phishing Exercises', 'url' => $home . 'cybersecurity/phishing-solutions-and-exercises/', 'description' => 'Train the human layer.' ),
						array( 'title' => 'Technology Risk Assessment', 'url' => $home . 'cybersecurity/free-cybersecurity-assessment/', 'description' => 'Free third-party look at your environment.' ),
					),
				),
				array(
					'title'       => 'Managed IT',
					'url'         => $home . 'managed-it/',
					'description' => 'Proactive operations. Exceptional support.',
					'children'    => array(
						array( 'title' => 'Secure Cloud Hosting', 'url' => $home . 'managed-it/cloud-hosting/', 'description' => 'Private or commercial hosting, done right.' ),
						array( 'title' => 'App-Based Calling', 'url' => $home . 'managed-it/application-based-calling/', 'description' => 'Replace the desk phone.' ),
						array( 'title' => 'Database Management', 'url' => $home . 'consulting-services/database-management/', 'description' => 'Production database expertise.' ),
					),
				),
				array(
					'title'       => 'IT Consulting',
					'url'         => $home . 'consulting-services/',
					'description' => 'Senior-led projects. Production outcomes.',
					'children'    => array(
						array( 'title' => 'Oracle Solutions', 'url' => $home . 'consulting-services/database-management/oracle-solutions/', 'description' => 'Migrations, RAC, tuning, licensing.' ),
						array( 'title' => 'Database Management', 'url' => $home . 'consulting-services/database-management/', 'description' => 'The full database practice.' ),
					),
				),
			),
		),
		array(
			'title'    => 'Industries',
			'url'      => $home . 'industries/',
			'children' => array(
				array(
					'title'       => 'Industries We Serve',
					'url'         => $home . 'industries/',
					'description' => 'Regulated, high-stakes environments.',
					'children'    => array(
						array( 'title' => 'Healthcare', 'url' => $home . 'industries/healthcare-it-services/', 'description' => 'HIPAA, EHR, and clinical operations.' ),
						array( 'title' => 'Finance', 'url' => $home . 'industries/financial-it-services/', 'description' => 'Risk, data, and always-on operations.' ),
						array( 'title' => 'Energy', 'url' => $home . 'industries/energy-it-services/', 'description' => 'OT, SCADA, and critical infrastructure.' ),
						array( 'title' => 'Manufacturing', 'url' => $home . 'industries/it-support-for-manufacturing/', 'description' => 'Plant systems and cyber insurance.' ),
						array( 'title' => 'Insurance', 'url' => $home . 'industries/insurance/', 'description' => 'Protect the data carriers already scrutinize.' ),
						array( 'title' => 'Hospitality', 'url' => $home . 'industries/hospitality/', 'description' => 'Payments, guests, and franchise networks.' ),
						array( 'title' => 'Nonprofits', 'url' => $home . 'industries/non-profits/', 'description' => 'Donor data on a real-world budget.' ),
						array( 'title' => 'Automotive', 'url' => $home . 'industries/automotive-it-support/', 'description' => 'Dealership and operations support.' ),
					),
				),
			),
		),
		array(
			'title'    => 'Resources',
			'url'      => $home . 'client-resources/',
			'children' => array(
				array(
					'title'    => 'Learn',
					'url'      => $home . 'client-resources/',
					'children' => array(
						array( 'title' => 'Articles', 'url' => $home . 'client-resources/articles/', 'description' => 'Practical guidance from the field.' ),
						array( 'title' => 'News & Blogs', 'url' => $home . 'verus-news-blogs/', 'description' => 'What we are seeing across clients.' ),
						array( 'title' => 'Videos', 'url' => $home . 'client-resources/informative-videos/', 'description' => 'Short briefings on security and IT.' ),
						array( 'title' => 'Testimonials', 'url' => $home . 'client-resources/testimonials/', 'description' => 'What clients say after the work is done.' ),
						array( 'title' => 'Careers', 'url' => $home . 'client-resources/careers/', 'description' => 'Join a senior-led practice.' ),
					),
				),
			),
		),
		array( 'title' => 'Contact Us', 'url' => $home . 'contact/' ),
	);

	verus_insert_menu_tree( $primary_id, $structure, 0 );

	$locations            = get_theme_mod( 'nav_menu_locations', array() );
	$locations['primary'] = $primary_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

/**
 * Recursively insert menu items.
 *
 * @param int   $menu_id  Menu term ID.
 * @param array $items    Nested items.
 * @param int   $parent   Parent menu item ID.
 */
function verus_insert_menu_tree( $menu_id, $items, $parent ) {
	foreach ( $items as $item ) {
		$id = wp_update_nav_menu_item( $menu_id, 0, array(
			'menu-item-title'       => $item['title'],
			'menu-item-url'         => $item['url'],
			'menu-item-status'      => 'publish',
			'menu-item-type'        => 'custom',
			'menu-item-parent-id'   => $parent,
			'menu-item-description' => isset( $item['description'] ) ? $item['description'] : '',
		) );
		if ( ! empty( $item['children'] ) && ! is_wp_error( $id ) ) {
			verus_insert_menu_tree( $menu_id, $item['children'], $id );
		}
	}
}
