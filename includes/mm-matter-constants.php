<?php
/**
 * Defines the constants to be used throughout MM_Matter
 *
 * Exception: `MM_MATTER_PATH` is defined in the main plugin file.
 *
 * @link https://github.com/reubenlillie/mm-matter/
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
 * Defines constants to be used throughout MM Matter.
 *
 * @since 0.1.0
 */
function mm_matter_define_initial_constants() {

	/**
	 * Defines the current version of MM Matter.
	 *
	 * The value should be updated to match
	 * the version number in the main plugin file header.
	 *
	 * @since 0.1.0
	 */
	define( 'MM_MATTER_VERSION', '0.1.0' );

} // mm_matter_define_initial_constants()
