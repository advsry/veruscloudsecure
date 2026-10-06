<?php
/**
 * Helpers: ACF-aware field reads, URLs, and small utilities.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Theme option from the Customizer.
 *
 * @param string $key     Setting key without the verus_ prefix.
 * @param mixed  $default Fallback.
 * @return mixed
 */
function verus_opt( $key, $default = '' ) {
	$value = get_theme_mod( 'verus_' . $key, $default );
	return ( '' === $value || null === $value ) ? $default : $value;
}

/**
 * Canonical Calendly URL.
 */
define( 'VERUS_MEETING_URL', 'https://calendly.com/tamra-veruscloudsecure/new-meeting' );

/**
 * Calendly / book-a-meeting URL.
 *
 * @return string
 */
function verus_meeting_url() {
	$url = verus_opt( 'meeting_url', VERUS_MEETING_URL );
	if ( is_string( $url ) && false !== strpos( $url, 'calendly.com/' ) && false === strpos( $url, 'tamra-veruscloudsecure/new-meeting' ) ) {
		return VERUS_MEETING_URL;
	}
	return $url;
}

/**
 * AI Maturity Assessment URL (kept on the existing slug).
 *
 * @return string
 */
function verus_assessment_url() {
	$url = verus_opt( 'assessment_url', '/ai-maturity-assessment/' );
	if ( is_string( $url ) && $url && '/' === substr( $url, 0, 1 ) ) {
		return home_url( $url );
	}
	return $url ? $url : home_url( '/ai-maturity-assessment/' );
}

/**
 * Post ID to read ACF from on the front end.
 * Front-page.php never enters the Loop, so get_the_ID() is often 0 there.
 *
 * @return int|false
 */
function verus_context_id() {
	if ( is_admin() && ! wp_doing_ajax() ) {
		return false;
	}
	if ( is_front_page() ) {
		$front = (int) get_option( 'page_on_front' );
		if ( $front ) {
			return $front;
		}
	}
	$qid = get_queried_object_id();
	if ( $qid ) {
		return (int) $qid;
	}
	$id = get_the_ID();
	return $id ? (int) $id : false;
}

/**
 * Read an ACF field, then a default.
 *
 * @param string $name    Field name.
 * @param mixed  $default Fallback.
 * @param mixed  $post_id Post ID or false for current.
 * @return mixed
 */
function verus_field( $name, $default = '', $post_id = false ) {
	if ( false === $post_id ) {
		$post_id = verus_context_id();
	}
	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $name, $post_id );
		if ( null !== $value && false !== $value && '' !== $value ) {
			return $value;
		}
	}
	return $default;
}

/**
 * Collect numbered ACF group rows (free ACF has no Repeater).
 *
 * @param string $base     Field prefix, e.g. pain.
 * @param int    $max      Highest index.
 * @param array  $defaults Fallback rows.
 * @param mixed  $post_id  Post ID.
 * @return array
 */
function verus_rows( $base, $max, $defaults = array(), $post_id = false ) {
	if ( false === $post_id ) {
		$post_id = verus_context_id();
	}
	$rows = array();
	for ( $i = 1; $i <= $max; $i++ ) {
		$row = null;
		if ( function_exists( 'get_field' ) ) {
			$flat_title    = get_field( $base . '_' . $i . '_title', $post_id );
			$flat_question = get_field( $base . '_' . $i . '_question', $post_id );
			$flat_metric   = get_field( $base . '_' . $i . '_metric', $post_id );
			if ( ( is_string( $flat_title ) && '' !== trim( $flat_title ) ) || ( is_string( $flat_question ) && '' !== trim( $flat_question ) ) || ( is_string( $flat_metric ) && '' !== trim( $flat_metric ) ) ) {
				$row = array(
					'title'    => is_string( $flat_title ) ? $flat_title : '',
					'text'     => (string) get_field( $base . '_' . $i . '_text', $post_id ),
					'url'      => (string) get_field( $base . '_' . $i . '_url', $post_id ),
					'icon'     => (string) get_field( $base . '_' . $i . '_icon', $post_id ),
					'question' => is_string( $flat_question ) ? $flat_question : '',
					'answer'   => (string) get_field( $base . '_' . $i . '_answer', $post_id ),
					'metric'   => is_string( $flat_metric ) ? $flat_metric : '',
					'label'    => (string) get_field( $base . '_' . $i . '_label', $post_id ),
					'tag'      => (string) get_field( $base . '_' . $i . '_tag', $post_id ),
					'featured' => (bool) get_field( $base . '_' . $i . '_featured', $post_id ),
				);
			} else {
				$group = get_field( $base . '_' . $i, $post_id );
				if ( is_array( $group ) ) {
					$row = $group;
				}
			}
		}
		if ( ! is_array( $row ) ) {
			continue;
		}
		$title = isset( $row['title'] ) ? $row['title'] : ( isset( $row['question'] ) ? $row['question'] : ( isset( $row['metric'] ) ? $row['metric'] : '' ) );
		if ( '' === trim( (string) $title ) ) {
			continue;
		}
		$rows[] = $row;
	}
	if ( empty( $rows ) && ! empty( $defaults ) ) {
		return $defaults;
	}
	return $rows;
}

/**
 * Default content blob for the current (or named) page slug.
 *
 * @param string $slug Page slug. Empty = current page.
 * @return array
 */
function verus_defaults( $slug = '' ) {
	if ( ! $slug && is_singular() ) {
		$slug = get_post_field( 'post_name', get_the_ID() );
	}
	$all = verus_default_content();
	if ( $slug && isset( $all[ $slug ] ) ) {
		return $all[ $slug ];
	}
	return isset( $all['_generic'] ) ? $all['_generic'] : array();
}

/**
 * Merge ACF + defaults for a named key.
 *
 * @param string $key     Top-level default key or ACF name.
 * @param mixed  $default Extra fallback.
 * @return mixed
 */
function verus_copy( $key, $default = '' ) {
	$acf = verus_field( $key, null );
	if ( null !== $acf && false !== $acf && '' !== $acf ) {
		return $acf;
	}
	$defaults = verus_defaults();
	if ( isset( $defaults[ $key ] ) && '' !== $defaults[ $key ] && null !== $defaults[ $key ] ) {
		return $defaults[ $key ];
	}
	return $default;
}

/**
 * Hero background image URL.
 *
 * @return string
 */
function verus_hero_image() {
	$img = verus_field( 'hero_image' );
	if ( is_array( $img ) && ! empty( $img['url'] ) ) {
		return $img['url'];
	}
	if ( is_string( $img ) && $img ) {
		return $img;
	}
	if ( has_post_thumbnail() ) {
		return get_the_post_thumbnail_url( get_the_ID(), 'full' );
	}
	return VERUS_URI . '/assets/images/hero-bg.jpg';
}

/**
 * Sanitize a tel href.
 *
 * @param string $phone Display phone.
 * @return string
 */
function verus_tel( $phone ) {
	return preg_replace( '/[^0-9+]/', '', $phone );
}

/**
 * Whether a URL is external.
 *
 * @param string $url URL.
 * @return bool
 */
function verus_is_external( $url ) {
	$host = wp_parse_url( $url, PHP_URL_HOST );
	$home = wp_parse_url( home_url(), PHP_URL_HOST );
	return $host && $home && 0 !== strcasecmp( $host, $home );
}

/**
 * Link attributes for optional new-tab Calendly links.
 *
 * @param string $url URL.
 * @return string
 */
function verus_link_atts( $url ) {
	$atts = '';
	if ( verus_is_external( $url ) ) {
		$atts = ' target="_blank" rel="noopener"';
	}
	return $atts;
}

/**
 * Current page ancestors + self for breadcrumbs (AIOSEO preferred).
 *
 * @return void
 */
function verus_breadcrumbs() {
	if ( function_exists( 'aioseo_breadcrumbs' ) ) {
		echo '<div class="v-crumbs">';
		aioseo_breadcrumbs();
		echo '</div>';
		return;
	}

	if ( ! is_page() ) {
		return;
	}

	$crumbs = array();
	$crumbs[] = array( 'url' => home_url( '/' ), 'title' => __( 'Home', 'verus' ) );

	$ancestors = array_reverse( get_post_ancestors( get_the_ID() ) );
	foreach ( $ancestors as $aid ) {
		$crumbs[] = array(
			'url'   => get_permalink( $aid ),
			'title' => get_the_title( $aid ),
		);
	}
	$crumbs[] = array( 'url' => '', 'title' => get_the_title() );

	echo '<nav class="v-crumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'verus' ) . '">';
	foreach ( $crumbs as $i => $crumb ) {
		if ( $i ) {
			echo '<span class="aioseo-breadcrumb-separator" aria-hidden="true">&raquo;</span>';
		}
		if ( $crumb['url'] ) {
			echo '<a href="' . esc_url( $crumb['url'] ) . '">' . esc_html( $crumb['title'] ) . '</a>';
		} else {
			echo '<strong>' . esc_html( $crumb['title'] ) . '</strong>';
		}
	}
	echo '</nav>';
}

/**
 * Assign a page template by slug.
 *
 * @param string $slug     Post name.
 * @param string $template Relative template path.
 * @return void
 */
function verus_set_page_template( $slug, $template ) {
	$page = get_page_by_path( $slug );
	if ( $page ) {
		update_post_meta( $page->ID, '_wp_page_template', $template );
	}
}

/**
 * Find a page ID by path, creating nothing.
 *
 * @param string $path Page path.
 * @return int
 */
function verus_page_id( $path ) {
	$page = get_page_by_path( $path );
	return $page ? (int) $page->ID : 0;
}

/**
 * Fallback footer lists when menus are not assigned yet.
 *
 * @param string $loc Menu location.
 */
function verus_footer_fallback( $loc ) {
	$home  = home_url( '/' );
	$lists = array(
		'footer_col_1' => array(
			array( 'AI Services', $home . 'ai-services/' ),
			array( 'Oracle Solutions', $home . 'consulting-services/database-management/oracle-solutions/' ),
			array( 'IT Consulting', $home . 'consulting-services/' ),
			array( 'AI Maturity Assessment', $home . 'ai-maturity-assessment/' ),
		),
		'footer_col_2' => array(
			array( 'Cybersecurity', $home . 'cybersecurity/' ),
			array( 'Compliance', $home . 'cybersecurity/cybersecurity-and-compliance/' ),
			array( 'Penetration Testing', $home . 'cybersecurity/penetration-testing/' ),
			array( 'Risk Assessment', $home . 'cybersecurity/free-cybersecurity-assessment/' ),
		),
		'footer_col_3' => array(
			array( 'Managed IT', $home . 'managed-it/' ),
			array( 'Cloud Hosting', $home . 'managed-it/cloud-hosting/' ),
			array( 'Microsoft 365 / Azure', $home . 'managed-it/' ),
			array( 'Disaster Recovery', $home . 'managed-it/' ),
		),
		'footer_col_4' => array(
			array( 'Who is Verus', $home . 'home/who-is-verus/' ),
			array( 'Industries', $home . 'industries/' ),
			array( 'Resources', $home . 'client-resources/' ),
			array( 'Contact', $home . 'contact/' ),
			array( 'Careers', $home . 'client-resources/careers/' ),
		),
	);

	if ( empty( $lists[ $loc ] ) ) {
		return;
	}

	echo '<ul class="v-footer__list">';
	foreach ( $lists[ $loc ] as $item ) {
		echo '<li><a href="' . esc_url( $item[1] ) . '">' . esc_html( $item[0] ) . '</a></li>';
	}
	echo '</ul>';
}
