<?php
/**
 * Theme Options
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Get theme.json
 *
 * @since 0.0.1
 * @return array
 */
function get_theme_json(): array {
	ob_start();
	echo file_get_contents( SWT_DIR . 'theme.json' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Required to get svg.json.
	return json_decode( ob_get_clean(), true );
}

/**
 * Get custom styles
 *
 * @since 0.0.1
 * @return array
 */
function get_theme_custom_styles(): array {
	$args = array(
		'orderby'     => 'post_type',
		'post_status' => 'publish',
		'post_type'   => array( 'wp_global_styles' ),
	);

	$export_posts  = get_posts( $args );
	$global_styles = isset( $export_posts[0]->post_content ) ? $export_posts[0]->post_content : '';

	return json_decode( $global_styles, true );
}
