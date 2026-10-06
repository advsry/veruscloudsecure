<?php
/**
 * Inline SVG icons used across service cards.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * Return an SVG icon by key.
 *
 * @param string $key Icon name.
 * @return string
 */
function verus_icon( $key ) {
	$icons = array(
		'tick'     => '<path d="M4 10.5l4 4 8-9"/>',
		'migrate'  => '<path d="M3 10h17l-4-4M29 22H12l4 4"/>',
		'gauge'    => '<path d="M4 22a12 12 0 1 1 24 0"/><path d="M16 22l6-7"/><path d="M4 26h24"/>',
		'shield'   => '<path d="M16 3l11 5v8c0 7-4.6 11.4-11 13C9.6 27.4 5 23 5 16V8l11-5z"/><path d="M16 12v6"/><circle cx="16" cy="22" r="1.4" fill="currentColor" stroke="none"/>',
		'database' => '<ellipse cx="10" cy="7" rx="7" ry="3"/><path d="M3 7v8c0 1.7 3.1 3 7 3s7-1.3 7-3V7"/><path d="M20 25h9l-3-3M29 19h-9l3 3"/>',
		'cluster'  => '<rect x="3" y="4" width="11" height="9" rx="2"/><rect x="18" y="4" width="11" height="9" rx="2"/><rect x="10.5" y="20" width="11" height="9" rx="2"/><path d="M8.5 13v3.5h15V13M16 16.5V20"/>',
		'doc'      => '<path d="M7 3h13l6 6v20H7z"/><path d="M19 3v7h7"/><path d="M12 19l3 3 6-6"/>',
		'star'     => '<path d="M16 3l3.6 7.4 8.1 1.1-5.9 5.7 1.4 8-7.2-3.8-7.2 3.8 1.4-8-5.9-5.7 8.1-1.1z"/>',
		'lock'     => '<rect x="6" y="14" width="20" height="14" rx="2"/><path d="M10 14V10a6 6 0 0 1 12 0v4"/>',
		'cloud'    => '<path d="M8 22h16a6 6 0 0 0 0-12 8 8 0 0 0-15.2 2A5 5 0 0 0 8 22z"/>',
		'network'  => '<circle cx="16" cy="16" r="3"/><circle cx="6" cy="8" r="2.5"/><circle cx="26" cy="8" r="2.5"/><circle cx="6" cy="24" r="2.5"/><circle cx="26" cy="24" r="2.5"/><path d="M13.5 14.2 8 9.8M18.5 14.2 24 9.8M13.5 17.8 8 22.2M18.5 17.8 24 22.2"/>',
		'phone'    => '<rect x="10" y="3" width="12" height="26" rx="3"/><path d="M14 26h4"/>',
		'users'    => '<circle cx="12" cy="11" r="4"/><circle cx="22" cy="12" r="3"/><path d="M4 26c1.2-5 4.2-7.5 8-7.5S18.8 21 20 26M20 20.5c2.4.3 4.6 1.6 6 5.5"/>',
		'bolt'     => '<path d="M18 3 8 18h8l-2 11 12-16h-8z"/>',
		'chart'    => '<path d="M4 26h24"/><path d="M8 26V14l6 4 6-10 6 6v12"/>',
		'headset'  => '<path d="M6 18v-4a10 10 0 0 1 20 0v4"/><rect x="3" y="16" width="6" height="10" rx="2"/><rect x="23" y="16" width="6" height="10" rx="2"/><path d="M26 26a6 6 0 0 1-6 6h-2"/>',
		'building' => '<path d="M6 28V8l10-4 10 4v20"/><path d="M6 28h20"/><path d="M12 12h2M18 12h2M12 18h2M18 18h2M15 28v-6h2v6"/>',
		'heart'    => '<path d="M16 27s-11-6.8-11-14a6.5 6.5 0 0 1 11-4.5A6.5 6.5 0 0 1 27 13c0 7.2-11 14-11 14z"/>',
		'factory'  => '<path d="M3 28V16l8 6V16l8 6V8h10v20z"/><path d="M24 8v-4"/>',
		'ai'       => '<rect x="9" y="9" width="14" height="14" rx="3"/><path d="M16 3v6M16 23v6M3 16h6M23 16h6M7 7l4 4M21 21l4 4M25 7l-4 4M11 21l-4 4"/>',
		'check'    => '<path d="M6 16l7 7 13-14"/>',
		'mail'     => '<rect x="3" y="7" width="26" height="18" rx="2"/><path d="M3 9l13 9 13-9"/>',
		'arrow'    => '<path d="M6 16h20M18 8l8 8-8 8"/>',
	);

	$path = isset( $icons[ $key ] ) ? $icons[ $key ] : $icons['star'];
	return '<svg viewBox="0 0 32 32" aria-hidden="true" focusable="false">' . $path . '</svg>';
}

/**
 * Tick used in trust lists.
 *
 * @return string
 */
function verus_tick() {
	return '<svg class="v-tick" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M4 10.5l4 4 8-9"/></svg>';
}
