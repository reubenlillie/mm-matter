<?php
/**
 * Controls MM Matter's core admin (back-end) dependencies
 *
 * This file includes all the files related to MM Matter's back end
 * and hooks the functions declared in those files into MM Matter core.
 *
 * @link https://github.com/reubenlillie.com/mm-matter/
 *
 * @package MM_Matter
 * @subpackage MM_Matter\admin
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Completes the registration for MM Matter's custom post types.
 */
require_once( plugin_dir_path( __FILE__ ) . 'mm-matter-post-types.php' );

	/**
	 * Adds a custom 'front_matter' post type.
	 *
	 * Adds post types on `init`,
	 * that is, after WordPress finishes loading
	 * but before any headers are sent.
	 *
	 * Custom hooks available:
	 *
	 * - apply_to_action_mm_register_front_matter_cpt_args
	 *
	 * @since 0.1.0
	 * @see init
	 * @link https://developer.wordpress.org/reference/hooks/init/
	 */
	add_action( 'init', 'action_mm_matter_register_front_matter_cpt', 0 );

    /**
	 * Adds a custom 'back_matter' post type.
	 *
	 * Adds post types on `init`,
	 * that is, after WordPress finishes loading
	 * but before any headers are sent.
	 *
	 * Custom hooks available:
	 *
	 * - apply_to_action_mm_register_back_matter_cpt_args
	 *
	 * @since 0.1.0
	 * @see init
	 * @link https://developer.wordpress.org/reference/hooks/init/
	 */
	add_action( 'init', 'action_mm_matter_register_back_matter_cpt', 0 );

/**
 * Completes the registration for MM Matter's custom taxonomies.
 */
require_once( plugin_dir_path( __FILE__ ) . 'mm-matter-taxonomies.php' );
