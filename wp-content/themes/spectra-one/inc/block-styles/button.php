<?php
/**
 * Register Button Block Styles.
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

register_block_style(
	'core/button',
	array(
		'name'         => SWT_PFX . '-button-secondary',
		'label'        => __( 'Secondary', 'spectra-one' ),
		'inline_style' => '
			.is-style-' . SWT_PFX . '-button-secondary .wp-element-button {
                color: var(--wp--preset--color--body);
				background-color: var(--wp--preset--color--surface);
			}

            .is-style-' . SWT_PFX . '-button-secondary .wp-element-button:hover {
                color: var(--wp--preset--color--body);
				background-color: var(--wp--preset--color--surface);
			}
		',
	)
);
