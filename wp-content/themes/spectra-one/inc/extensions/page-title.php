<?php
/**
 * Show and hide page / post title.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Hide Elements.
 *
 * @since 0.0.1
 * @param string $title Page title.
 * @param int    $post_id Post id.
 * @return string
 */
function remove_page_title( string $title, int $post_id = 0 ):string {

	if ( ! $post_id ) {
		return $title;
	}

	$get_check_title = get_post_meta( $post_id, 'swt_meta_site_title_display', true );
	$check_meta      = $get_check_title ? false : true;

	if ( ! is_admin() && is_singular() && boolval( $check_meta ) && ! in_the_loop() ) {
		return '';
	}

	return $title;
}

add_filter( 'the_title', SWT_NS . 'remove_page_title', 10, 2 );
