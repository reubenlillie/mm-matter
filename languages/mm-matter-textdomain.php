<?php
/**
 * Defines MM Matter's textdomain
 *
 * This file contains a function to load MM Matter's textdomain
 * so it is ready for localization.
 *
 * @link https://github.com/reubenlillie/mm-matter/
 *
 * @package MM_Matter
 * @subpackage MM_Matter\languages
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Loads MM Matter's textdomain.
 *
 * Loads the translated strings
 * handled by the files in MM Matter's `/languages/` directory.
 *
 * @since 0.1.0
 *
 * @see load_plugin_textdomain()
 * @link https://developer.wordpress.org/reference/functions/load_plugin_textdomain/
 * @link https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/
 */
function action_mm_matter_load_plugin_textdomain() {

	load_plugin_textdomain(
		'mm-matter',
		FALSE,
		basename( dirname( __FILE__ ) ) . '/languages/'
	);

} // action_mm_matter_load_plugin_textdomain()


