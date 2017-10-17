<?php
/**
 * Runs when MM Matter is activated
 *
 * This file contains a function
 * that calls the functions for MM Matter's custom post types and taxonomies,
 * then flushes rewrite rules for permalinks.
 *
 * @link https://github.com/reubenlillie/manualmaker/
 *
 * @package MM_Matter
 * @subpackage MM_Matter\includes
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Runs when MM Matter is activated.
 *
 * Call registration functions for the following post types and taxonomies:
 *
 * - 'front_matter' custom post type
 * - 'back_matter' custom post type
 *
 * then flushes the rewrite rules for permalinks to avoid 404 errors.
 *
 * @author Reuben L. Lillie <rlillie@nazarene.org>
 * @since 0.1.0
 * @see flush_rewrite_rules()
 * @link https://developer.wordpress.org/reference/functions/flush_rewrite_rules/
 * @link https://developer.wordpress.org/plugins/the-basics/activation-deactivation-hooks/#activation
 * @link http://solislab.com/blog/plugin-activation-checklist/
 */
function mm_matter_activate() {

	/**
	 * Calls the function to register the custom 'front_matter' post type.
	 *
	 * This action is documented in 'admin/mm-matter-post-types.php
	 */
	action_mm_matter_register_front_matter_cpt();

	/**
	 * Calls the function to register the custom 'back_matter' post type.
	 *
	 * This action is documented in 'admin/mm-matter-post-types.php
	 */
	action_mm_matter_register_back_matter_cpt();

	/**
	 * Flushes rewrite rules.
	 *
	 * Removes rewrite rules for permalinks then recreates them
	 * after the custom post types and taxonomies have been registered.
	 *
	 * NB: Because this is an expensive operation, only run this function
	 * after custom post types and taxonomies have been properly registered.
	 *
	 * @link https://developer.wordpress.org/reference/functions/flush_rewrite_rules/
	 * @link http://solislab.com/blog/plugin-activation-checklist/#flush-rewrite-rules
	 */
	flush_rewrite_rules();

} // mm_matter_activate()
