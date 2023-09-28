<?php
/**
 * Require All Extensions
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

require_once 'responsive.php';
require_once 'header.php';
require_once 'metabox.php';
require_once 'hide-elements.php';
require_once 'page-title.php';

