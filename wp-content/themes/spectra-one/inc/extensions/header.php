<?php
/**
 * Header functions
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

add_filter( 'render_block', SWT_NS . 'render_header', 10, 2 );

/**
 * Header render function.
 *
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_header( string $block_content, array $block ):string { 
	$post_id = get_the_ID();

	$sticky_header_condition          = ( isset( $block['attrs']['SWTStickyHeader'] ) && true === $block['attrs']['SWTStickyHeader'] ) || get_post_meta( $post_id, 'swt_meta_sticky_header', true );
	$transparent_header_condition     = ( isset( $block['attrs']['SWTTransparentHeader'] ) && true === $block['attrs']['SWTTransparentHeader'] ) || get_post_meta( $post_id, 'swt_meta_transparent_header', true );
	$not_transparent_header_condition = ! ( isset( $block['attrs']['SWTTransparentHeader'] ) ) || ( isset( $block['attrs']['SWTTransparentHeader'] ) && false === $block['attrs']['SWTTransparentHeader'] ) || ( get_post_meta( $post_id, 'swt_meta_transparent_header', true ) );

	if ( $sticky_header_condition && ! get_post_meta( $post_id, 'swt_meta_transparent_header', true ) ) {

		$dom    = dom( $block_content );
		$header = get_dom_element( 'header', $dom );

		if ( ! $header ) {
			return $block_content;
		}

		$classes = $header->getAttribute( 'class' );
		$header->setAttribute( 'class', $classes . ' swt-sticky-header' );

		$block_content = $dom->saveHTML();

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'header_inline_css' );

		if ( $not_transparent_header_condition ) {
			add_filter( 'swt_dynamic_theme_js', SWT_NS . 'header_inline_js' );
		}   
	}

	if ( $transparent_header_condition && ! get_post_meta( $post_id, 'swt_meta_sticky_header', true ) ) {
		
		$dom    = dom( $block_content );
		$header = get_dom_element( 'header', $dom );

		if ( ! $header ) {
			return $block_content;
		}

		$classes = $header->getAttribute( 'class' );
		$header->setAttribute( 'class', $classes . ' swt-transparent-header' );

		$block_content = $dom->saveHTML();

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'header_inline_transparent_css' );
	}

	if ( $sticky_header_condition || $transparent_header_condition ) {
		add_filter( 'swt_dynamic_theme_js', SWT_NS . 'header_wp_admin_bar_spacing_js' );
	}

	return $block_content;
}

/**
 * Load header inline css.
 *
 * @since 0.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function header_inline_css( string $css ): string {

	// Sticky header option.
	$css_output = array(
		'.swt-sticky-header' => array(
			'position' => 'fixed',
			'top'      => '0',
			'left'     => '0',
			'width'    => '100%',
			'z-index'  => '999',
		),
	);
	$css       .= parse_css( $css_output );
	return $css;
}

/**
 * Load header inline js.
 *
 * @since 0.0.1
 * @param string $js Inline JS.
 * @return string
 */
function header_inline_js( string $js ): string {
	$inline_js = <<<JS
	function docReady(fn) {
		// see if DOM is already available
		if (document.readyState === "complete" || document.readyState === "interactive") {
			// call on next available tick
			setTimeout(fn, 1);
		} else {
			document.addEventListener("DOMContentLoaded", fn);
		}
	}
	docReady(function() {
		// Sticky header option.
		const header = document.querySelector( '.swt-sticky-header' );
		const body = document.querySelector( 'body' );
		if( header ) {

			const height = header.offsetHeight;

			if( height ) {
				body.style.paddingTop = parseFloat( height ) + 'px';
			}
		}
	});
JS;
	$js       .= $inline_js;
	return $js;
}

/**
 * Load transparent header inline css.
 *
 * @since 0.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function header_inline_transparent_css( string $css ): string {

	$css_output = array(
		'.swt-transparent-header'                   => array(
			'position' => 'absolute',
			'top'      => '0',
			'left'     => '0',
			'width'    => '100%',
			'z-index'  => '999',
		),

		'.swt-transparent-header > .has-background' => array(
			'background' => 'transparent !important',
		),
	);
	$css .= parse_css( $css_output );
	return $css;
}


/**
 * Load header wp_admin_bar spacing inline js.
 *
 * @since 0.0.1
 * @param string $js Inline JS.
 * @return string
 */
function header_wp_admin_bar_spacing_js( string $js ): string {
	$inline_js = <<<JS
	function docReady(fn) {
		// see if DOM is already available
		if (document.readyState === "complete" || document.readyState === "interactive") {
			// call on next available tick
			setTimeout(fn, 1);
		} else {
			document.addEventListener("DOMContentLoaded", fn);
		}
	}
	docReady(function() {

		const wpAdminBar = document.querySelector('#wpadminbar');
		const header = document.querySelector( 'header' );

		if( header && wpAdminBar ) {
			header.style.top = wpAdminBar.offsetHeight + 'px';
		}

	});
JS;
	$js       .= $inline_js;
	return $js;
}
