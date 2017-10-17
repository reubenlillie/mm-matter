<?php
/**
 * The MM Matter plugin file
 *
 * Make matter for ManualMaker—front and back.
 *
 * @link https://github.com/reubenlillie/manualmaker
 *
 * @package MM_Matter
 * @author Reuben L. Lillie <rlillie@nazarene.org>
 * @copyright 2017 Church of the Nazarene
 * @license <http://www.gnu.org/licenses/gpl-2.0.txt> GNUv2 or later
 *
 * @wordpress-plugin
 * Plugin Name: MM Matter
 * Plugin URI:  https://github.com/reubenlillie/mm-matter.git
 * Description: Make matter for ManualMaker—front and back.
 * Author:      Reuben L. Lillie
 * Author URI:  http://reubenlillie.com/about/
 * Version:     0.1.0
 * License:     GPLv2 or later
 * Domain Path: /languages
 * Text Domain: mm-matter
 *
 * MM Matter is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License,
 * or any later version.
 *
 * MM Matter is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General
 * Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with MM Matter. If not, see https://www.gnu.org/licenses/gpl-2.0.html
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Checks whether required plugins are active.
 *
 * @since 0.1.0
 */
function action_mm_matter_has_required_plugins() {

	if (
		is_admin()
		&& current_user_can( 'activate_plugins' )
		&&  ( !is_plugin_active( 'manualmaker/manualmaker.php' ) )
		) {

		/**
		 * Displays an error message in the admin area.
		 *
		 * @since 0.1.0
		 *
		 * @see admin_notices()
		 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices
		 */
        add_action( 'admin_notices', 'action_mm_matter_notice' );

		/* This action is documented in 'wp-admin/includes/plugin.php' */
        deactivate_plugins( plugin_basename( __FILE__ ) );

        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
		} // if

	}

} // action_mm_matter_has_required_plugins()
add_action( 'admin_init', 'action_mm_matter_has_required_plugins' );

/**
 * Runs when any of the required plugins is not active.
 *
 * @since 0.1.0
 */
function mm_matter_notice() {

	if ( !is_plugin_active( 'manualmaker/manualmaker.php' ) ) {

	?>

	<div class="error">
		<p><?php
		echo sprintf( __( 'Sorry, but MM Matter requires '
				. 'The Church of the Nazarene\'s %sManualMaker%s plugin '
				. 'to be installed and active.',
				'mm-matter'
				),
		'<a href="https://github.com/reubenlillie/manualmaker/" target="_blank">',
		'</a>'
		);
		?></p>
	</div>

	<?php

	} // if

} // action_mm_matter_notice()

/**
 * Runs when MM Matter is actived.
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/mm-matter-activate.php' );
	/**
	 * Completes MM Matter activation.
	 *
	 * @since 0.1.0
	 *
	 * @see register_activation_hook()
	 * @link https://developer.wordpress.org/reference/functions/register_activation_hook/
	 */
	register_activation_hook( __FILE__, 'mm_matter_activate' );

/**
 * Runs when MM Matter is deactived.
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/mm-matter-deactivate.php' );
	/**
	 * Completes MM Matter deactivation.
	 *
	 * @since 0.1.0
	 *
	 * @see register_deactivation_hook()
	 * @link https://developer.wordpress.org/reference/functions/register_deactivation_hook/
	 */
	register_deactivation_hook( __FILE__, 'mm_matter_deactivate' );

/**
 * Controls MM Matter's core dependencies.
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/mm-matter-core.php' );
