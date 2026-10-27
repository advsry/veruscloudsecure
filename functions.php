<?php
/**
 * Verus Cloud Secure theme bootstrap.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

define( 'VERUS_VERSION', '1.1.5' );
define( 'VERUS_DIR', get_template_directory() );
define( 'VERUS_URI', get_template_directory_uri() );

require VERUS_DIR . '/inc/helpers.php';
require VERUS_DIR . '/inc/icons.php';
require VERUS_DIR . '/inc/defaults.php';
require VERUS_DIR . '/inc/setup.php';
require VERUS_DIR . '/inc/home-admin.php';
require VERUS_DIR . '/inc/customizer.php';
require VERUS_DIR . '/inc/mega-menu.php';
require VERUS_DIR . '/inc/acf.php';
require VERUS_DIR . '/inc/render.php';
require VERUS_DIR . '/inc/seo.php';
require VERUS_DIR . '/inc/landing-calendly.php';
require VERUS_DIR . '/inc/page-setup.php';
