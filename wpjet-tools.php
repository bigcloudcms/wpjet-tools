<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpjet.co
 * @since             1.0.0
 * @package           Wpjet_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       WPJet Tools
 * Plugin URI:        https://wpjet.co
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            WPJET
 * Author URI:        https://wpjet.co
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpjet-tools
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpjet-tools-activator.php
 */
function activate_wpjet_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpjet-tools-activator.php';
	Wpjet_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpjet-tools-deactivator.php
 */
function deactivate_wpjet_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpjet-tools-deactivator.php';
	Wpjet_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpjet_tools' );
register_deactivation_hook( __FILE__, 'deactivate_wpjet_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpjet-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpjet_tools() {

	$plugin = new Wpjet_Tools();
	$plugin->run();

}
run_wpjet_tools();
