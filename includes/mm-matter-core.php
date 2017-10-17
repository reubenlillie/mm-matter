<?php
/**
 * Controls MM Matter's core dependencies
 *
 * This file includes the files that, in turn, control
 * MM Matter's primary components, namely:
 *
 * - admin (back-end) dependencies
 * - internationalization (i18n)/localization (l10n) dependencies
 * - public (front-end) dependencies
 *
 * @link https://github.com/reubenlillie/mm-matter/
 *
 * @todo Create basic templating for `mm-matter-public.php`
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
 * Controls MM Matter's core admin (back-end) dependencies.
 */
require_once( plugin_dir_path( __FILE__ ) . '../admin/mm-matter-admin.php' );

/**
 * Controls MM Matter's core internationalization dependencies.
 */
require_once( plugin_dir_path( __FILE__ ) . '../languages/mm-matter-i18n.php' );

/**
 * Controls MM Matter's core public (front-end) dependencies.
 */
// require_once( plugin_dir_path( __FILE__ ) . '../public/mm-matter-public.php' );
