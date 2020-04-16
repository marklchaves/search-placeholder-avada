<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://caughtmyeye.cc
 * @since      1.0.0
 *
 * @package    Search_Placeholder_Avada
 * @subpackage Search_Placeholder_Avada/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Search_Placeholder_Avada
 * @subpackage Search_Placeholder_Avada/includes
 * @author     caught my eye <mark@marklchaves.com>
 */
class Search_Placeholder_Avada_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'search-placeholder-avada',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
