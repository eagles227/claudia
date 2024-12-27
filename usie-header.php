<?php
/**
 * WordPress Blog Header
 *
 * This file loads the WordPress environment and template.
 *
 * @package WordPress
 */

/**
 * Set up WordPress vars and include files.
 *
 * @var bool
 */
if ( ! isset( $wp ) ) {
    require_once __DIR__ . '/wp-load.php';
}

/**
 * This loads the WordPress environment and template.
 *
 * @var bool
 */
require_once ABSPATH . WPINC . '/template-loader.php';
