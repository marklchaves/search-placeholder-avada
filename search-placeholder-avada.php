<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/marklchaves/search-placeholder-avada
 * @since             1.0.0
 * @package           search_placeholder_avada
 *
 * @wordpress-plugin
 * Plugin Name:       Search Placeholder Avada
 * Plugin URI:       https://github.com/marklchaves/search-placeholder-avada
 * Description:       Allows you to customise the search box placeholder text for Avada.
 * Version:           2.0.0
 * Author:            caught my eye
 * Author URI:        https://caughtmyeye.cc
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       search-placeholder-avada
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
define( 'SEARCH_PLACEHOLDER_AVADA_VERSION', '2.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-search-placeholder-avada-activator.php
 */
function activate_search_placeholder_avada() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-search-placeholder-avada-activator.php';
	search_placeholder_avada_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-search-placeholder-avada-deactivator.php
 */
function deactivate_search_placeholder_avada() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-search-placeholder-avada-deactivator.php';
	search_placeholder_avada_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_search_placeholder_avada' );
register_deactivation_hook( __FILE__, 'deactivate_search_placeholder_avada' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-search-placeholder-avada.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_search_placeholder_avada() {

	$plugin = new search_placeholder_avada();
	$plugin->run();

}
run_search_placeholder_avada();
