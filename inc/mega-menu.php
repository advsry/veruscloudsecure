<?php
/**
 * Cloudflare-style mega menu built from the native WordPress Primary menu.
 *
 * Appearance → Menus:
 *   Level 1 = top bar (Services, Industries, …)
 *   Level 2 = left rail categories inside the mega panel
 *   Level 3 = links shown when a rail category is active
 * Menu item Description (Screen Options → Description) becomes the one-line blurb.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Build a parent → children tree from a flat menu item list.
 *
 * @param array $items WP_Post menu items.
 * @return array
 */
function verus_menu_tree( $items ) {
	$by_parent = array();
	foreach ( $items as $item ) {
		$by_parent[ (int) $item->menu_item_parent ][] = $item;
	}

	$walk = function ( $parent_id ) use ( &$walk, $by_parent ) {
		$branch = array();
		if ( empty( $by_parent[ $parent_id ] ) ) {
			return $branch;
		}
		foreach ( $by_parent[ $parent_id ] as $item ) {
			$item->verus_children = $walk( (int) $item->ID );
			$branch[]             = $item;
		}
		return $branch;
	};

	return $walk( 0 );
}

/**
 * Menu item blurb: ACF mega_blurb, then the native Description field.
 *
 * @param WP_Post $item Menu item.
 * @return string
 */
function verus_menu_blurb( $item ) {
	if ( function_exists( 'get_field' ) ) {
		$blurb = get_field( 'mega_blurb', $item->ID );
		if ( $blurb ) {
			return $blurb;
		}
	}
	return isset( $item->description ) ? $item->description : '';
}

/**
 * Fallback tree used before a menu is assigned.
 *
 * @return array
 */
function verus_fallback_nav() {
	$make = function ( $title, $url, $blurb = '', $children = array() ) {
		return array(
			'title'    => $title,
			'url'      => $url,
			'blurb'    => $blurb,
			'children' => $children,
		);
	};

	$home = home_url( '/' );

	return array(
		$make( 'Home', $home ),
		$make( 'Who is Verus', $home . 'home/who-is-verus/' ),
		$make(
			'Services',
			$home . 'services/',
			'',
			array(
				$make(
					'AI Services',
					$home . 'ai-services/',
					'Put AI to work without putting data at risk.',
					array(
						$make( 'Virtual AI Employees', $home . 'ai-services/virtual-ai-employees/', 'Replace a role. Digital workers that run 24/7.' ),
						$make( 'Private AI Governance', $home . 'ai-services/private-ai-governance/', 'Insurance-ready private AI — before you buy anything else.' ),
						$make( 'Smart Task Automation', $home . 'ai-services/smart-task-automation/', 'Connect apps. Eliminate busywork.' ),
						$make( 'Digital Customer Assistants', $home . 'ai-services/digital-customer-assistants/', 'Replace the desk phone. Voice and chat that books meetings.' ),
						$make( 'Instant Business Intelligence', $home . 'ai-services/instant-business-intelligence/', 'Talk to your data in plain English.' ),
						$make( 'Employee AI Agents', $home . 'ai-services/employee-ai-agents/', 'Augment a person. Sidekicks trained on your policies.' ),
						$make( 'AI Training Curriculum', $home . 'ai-services/ai-training-curriculum/', 'Prompting, safety, and team workshops.' ),
						$make( 'AI Maturity Assessment', $home . 'ai-maturity-assessment/', 'Get your score in minutes.' ),
					)
				),
				$make(
					'Cybersecurity',
					$home . 'cybersecurity/',
					'Protect the business while you adopt AI.',
					array(
						$make( 'Cybersecurity & Compliance', $home . 'cybersecurity/cybersecurity-and-compliance/', 'Audit trails, monitoring, reporting.' ),
						$make( 'Insurance Compliance', $home . 'cybersecurity/cybersecurity-insurance-compliance/', 'Meet carrier requirements before renewal.' ),
						$make( 'Multi-Factor Authentication', $home . 'cybersecurity/multi-factor-authentication/', 'Stop the credential-stuffing attacks.' ),
						$make( 'Penetration Testing', $home . 'cybersecurity/penetration-testing/', 'Find the holes before attackers do.' ),
						$make( 'Phishing Exercises', $home . 'cybersecurity/phishing-solutions-and-exercises/', 'Train the human layer.' ),
						$make( 'Technology Risk Assessment', $home . 'cybersecurity/free-cybersecurity-assessment/', 'Free third-party look at your environment.' ),
					)
				),
				$make(
					'Managed IT',
					$home . 'managed-it/',
					'Proactive operations. Exceptional support.',
					array(
						$make( 'Secure Cloud Hosting', $home . 'managed-it/cloud-hosting/', 'Private or commercial hosting, done right.' ),
						$make( 'Disaster Recovery', $home . 'managed-it/', 'Keep the business running when systems fail.' ),
						$make( 'Microsoft 365 / Azure', $home . 'managed-it/', 'Email, Teams, and Azure under one roof.' ),
						$make( 'Network Management', $home . 'managed-it/', 'Connectivity that does not become the bottleneck.' ),
						$make( 'Telecommunications', $home . 'managed-it/', 'Cabling, phones, and physical security.' ),
						$make( 'App-Based Calling', $home . 'managed-it/application-based-calling/', 'Replace the desk phone.' ),
					)
				),
				$make(
					'IT Consulting',
					$home . 'consulting-services/',
					'Senior-led projects. Production outcomes.',
					array(
						$make( 'Oracle Solutions', $home . 'consulting-services/database-management/oracle-solutions/', 'Migrations, RAC, tuning, licensing.' ),
						$make( 'Database Management', $home . 'consulting-services/database-management/', 'Production database expertise.' ),
						$make( 'Network Migrations', $home . 'consulting-services/', 'Modernize the foundation under AI.' ),
						$make( 'Email & Microsoft 365 Migrations', $home . 'consulting-services/', 'Move to modern collaboration without downtime.' ),
						$make( 'Linux Server Solutions', $home . 'consulting-services/', 'Secure, scalable Linux infrastructure.' ),
					)
				),
			)
		),
		$make(
			'Industries',
			$home . 'industries/',
			'',
			array(
				$make(
					'Industries We Serve',
					$home . 'industries/',
					'Regulated, high-stakes environments.',
					array(
						$make( 'Healthcare', $home . 'industries/healthcare-it-services/', 'HIPAA, EHR, and clinical operations.' ),
						$make( 'Finance', $home . 'industries/financial-it-services/', 'Risk, data, and always-on operations.' ),
						$make( 'Energy', $home . 'industries/energy-it-services/', 'OT, SCADA, and critical infrastructure.' ),
						$make( 'Manufacturing', $home . 'industries/it-support-for-manufacturing/', 'Plant systems and cyber insurance.' ),
						$make( 'Insurance', $home . 'industries/insurance/', 'Protect the data carriers already scrutinize.' ),
						$make( 'Hospitality', $home . 'industries/hospitality/', 'Payments, guests, and franchise networks.' ),
						$make( 'Nonprofits', $home . 'industries/non-profits/', 'Donor data on a real-world budget.' ),
						$make( 'Automotive', $home . 'industries/automotive-it-support/', 'Dealership and operations support.' ),
					)
				),
			)
		),
		$make(
			'Resources',
			$home . 'client-resources/',
			'',
			array(
				$make(
					'Learn',
					$home . 'client-resources/',
					'',
					array(
						$make( 'Articles', $home . 'client-resources/articles/', 'Practical guidance from the field.' ),
						$make( 'News & Blogs', $home . 'verus-news-blogs/', 'What we are seeing across clients.' ),
						$make( 'Videos', $home . 'client-resources/informative-videos/', 'Short briefings on security and IT.' ),
						$make( 'Testimonials', $home . 'client-resources/testimonials/', 'What clients say after the work is done.' ),
						$make( 'Careers', $home . 'client-resources/careers/', 'Join a senior-led practice.' ),
					)
				),
			)
		),
		$make( 'Contact Us', $home . 'contact/' ),
	);
}

/**
 * Normalize WP menu items or the fallback array into one shape.
 *
 * @param mixed $item WP_Post or array.
 * @return array
 */
function verus_normalize_item( $item ) {
	if ( is_array( $item ) ) {
		$children = array();
		foreach ( $item['children'] as $child ) {
			$children[] = verus_normalize_item( $child );
		}
		return array(
			'title'    => $item['title'],
			'url'      => $item['url'],
			'blurb'    => $item['blurb'],
			'children' => $children,
		);
	}

	$children = array();
	if ( ! empty( $item->verus_children ) ) {
		foreach ( $item->verus_children as $child ) {
			$children[] = verus_normalize_item( $child );
		}
	}

	return array(
		'title'    => $item->title,
		'url'      => $item->url,
		'blurb'    => verus_menu_blurb( $item ),
		'children' => $children,
	);
}

/**
 * Primary nav items for the header.
 *
 * @return array
 */
function verus_nav_items() {
	$locations = get_nav_menu_locations();
	if ( ! empty( $locations['primary'] ) ) {
		$items = wp_get_nav_menu_items( $locations['primary'] );
		if ( $items ) {
			$tree  = verus_menu_tree( $items );
			$out   = array();
			foreach ( $tree as $item ) {
				$out[] = verus_normalize_item( $item );
			}
			return $out;
		}
	}
	return verus_fallback_nav();
}

/**
 * Render the primary navigation (desktop mega + mobile accordion).
 *
 * @return void
 */
function verus_the_primary_nav() {
	$items = verus_nav_items();
	echo '<ul class="v-nav__list">';
	foreach ( $items as $index => $item ) {
		verus_nav_item( $item, $index );
	}
	echo '</ul>';
}

/**
 * One top-level nav item, with optional mega panel.
 *
 * @param array $item  Normalized item.
 * @param int   $index Index for unique panel ids.
 */
function verus_nav_item( $item, $index ) {
	$has_children = ! empty( $item['children'] );
	$classes      = 'v-nav__item';
	if ( $has_children ) {
		$classes .= ' v-nav__item--mega';
	}

	echo '<li class="' . esc_attr( $classes ) . '">';
	echo '<a class="v-nav__link" href="' . esc_url( $item['url'] ) . '"';
	if ( $has_children ) {
		echo ' aria-haspopup="true" aria-expanded="false" data-mega-trigger';
	}
	echo '>' . esc_html( $item['title'] );
	if ( $has_children ) {
		echo '<svg class="v-nav__caret" viewBox="0 0 12 8" aria-hidden="true"><path d="M1 1.5l5 5 5-5"/></svg>';
	}
	echo '</a>';

	if ( $has_children ) {
		verus_mega_panel( $item, $index );
	}
	echo '</li>';
}

/**
 * Full-width mega panel (Cloudflare pattern: rail + cards + CTA).
 *
 * @param array $item  Top-level item.
 * @param int   $index Index.
 */
function verus_mega_panel( $item, $index ) {
	$rail = $item['children'];
	$id   = 'v-mega-' . $index;

	echo '<div class="v-mega" id="' . esc_attr( $id ) . '" hidden>';
	echo '<div class="v-mega__inner">';

	$has_grand = false;
	foreach ( $rail as $cat ) {
		if ( ! empty( $cat['children'] ) ) {
			$has_grand = true;
			break;
		}
	}

	if ( $has_grand ) {
		echo '<div class="v-mega__rail" role="tablist" aria-label="' . esc_attr( $item['title'] ) . '">';
		foreach ( $rail as $r => $cat ) {
			$selected = 0 === $r ? 'true' : 'false';
			echo '<button class="v-mega__rail-btn" type="button" role="tab" aria-selected="' . $selected . '" data-mega-tab="' . esc_attr( $index . '-' . $r ) . '">';
			echo '<span class="v-mega__rail-title">' . esc_html( $cat['title'] ) . '</span>';
			if ( $cat['blurb'] ) {
				echo '<span class="v-mega__rail-blurb">' . esc_html( $cat['blurb'] ) . '</span>';
			}
			echo '<svg class="v-mega__rail-go" viewBox="0 0 16 16" aria-hidden="true"><path d="M6 3l5 5-5 5"/></svg>';
			echo '</button>';
		}
		echo '</div>';

		echo '<div class="v-mega__panels">';
		foreach ( $rail as $r => $cat ) {
			$hidden = 0 === $r ? '' : ' hidden';
			echo '<div class="v-mega__panel"' . $hidden . ' role="tabpanel" data-mega-panel="' . esc_attr( $index . '-' . $r ) . '">';
			echo '<div class="v-mega__panel-head">';
			echo '<a class="v-mega__overview" href="' . esc_url( $cat['url'] ) . '">' . esc_html( sprintf( __( 'Overview: %s', 'verus' ), $cat['title'] ) ) . ' →</a>';
			echo '</div>';
			echo '<div class="v-mega__grid">';
			foreach ( $cat['children'] as $link ) {
				echo '<a class="v-mega__card" href="' . esc_url( $link['url'] ) . '">';
				echo '<strong>' . esc_html( $link['title'] ) . '</strong>';
				if ( $link['blurb'] ) {
					echo '<span>' . esc_html( $link['blurb'] ) . '</span>';
				}
				echo '</a>';
			}
			echo '</div></div>';
		}
		echo '</div>';
	} else {
		echo '<div class="v-mega__panels v-mega__panels--flat">';
		echo '<div class="v-mega__grid">';
		foreach ( $rail as $link ) {
			echo '<a class="v-mega__card" href="' . esc_url( $link['url'] ) . '">';
			echo '<strong>' . esc_html( $link['title'] ) . '</strong>';
			if ( $link['blurb'] ) {
				echo '<span>' . esc_html( $link['blurb'] ) . '</span>';
			}
			echo '</a>';
		}
		echo '</div></div>';
	}

	echo '<aside class="v-mega__cta">';
	echo '<p class="v-eyebrow">' . esc_html__( 'Talk to Verus', 'verus' ) . '</p>';
	echo '<h3>' . esc_html__( 'Not sure where to start?', 'verus' ) . '</h3>';
	echo '<p>' . esc_html__( 'Book 30 minutes with a senior consultant. Fixed scope. No obligation.', 'verus' ) . '</p>';
	echo '<a class="v-btn v-btn--gold" href="' . esc_url( verus_meeting_url() ) . '"' . verus_link_atts( verus_meeting_url() ) . '>' . esc_html( verus_opt( 'meeting_label', 'Book A Meeting' ) ) . '</a>';
	$phone = verus_opt( 'phone', '1-800-958-3787' );
	echo '<a class="v-mega__phone" href="tel:' . esc_attr( verus_tel( $phone ) ) . '">' . esc_html( $phone ) . '</a>';
	echo '</aside>';

	echo '</div></div>';
}
