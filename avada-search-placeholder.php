<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/marklchaves/avada-search-placeholder
 * @since             1.0.0
 * @package           Avada_Search_Placeholder
 *
 * @wordpress-plugin
 * Plugin Name:       Avada Search Placeholder
 * Plugin URI:       https://github.com/marklchaves/avada-search-placeholder
 * Description:       Allows you to customise the search box placeholder text for Avada.
 * Version:           1.0.0
 * Author:            caught my eye
 * Author URI:        https://caughtmyeye.cc
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       avada-search-placeholder
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AVADA_SEARCH_PLACEHOLDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-avada-search-placeholder-activator.php
 */
function activate_avada_search_placeholder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-avada-search-placeholder-activator.php';
	Avada_Search_Placeholder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-avada-search-placeholder-deactivator.php
 */
function deactivate_avada_search_placeholder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-avada-search-placeholder-deactivator.php';
	Avada_Search_Placeholder_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_avada_search_placeholder' );
register_deactivation_hook( __FILE__, 'deactivate_avada_search_placeholder' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-avada-search-placeholder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_avada_search_placeholder() {

	$plugin = new Avada_Search_Placeholder();
	$plugin->run();

}
run_avada_search_placeholder();
