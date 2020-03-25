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
 * @package    Avada_Search_Placeholder
 * @subpackage Avada_Search_Placeholder/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Avada_Search_Placeholder
 * @subpackage Avada_Search_Placeholder/includes
 * @author     caught my eye <mark@marklchaves.com>
 */
class Avada_Search_Placeholder_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'avada-search-placeholder',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
