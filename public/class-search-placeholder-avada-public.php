<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://caughtmyeye.cc
 * @since      1.0.0
 *
 * @package    Search_Placeholder_Avada
 * @subpackage Search_Placeholder_Avada/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Search_Placeholder_Avada
 * @subpackage Search_Placeholder_Avada/public
 * @author     caught my eye <mark@marklchaves.com>
 */
class Search_Placeholder_Avada_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/search-placeholder-avada-public.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 * 
	 * New CSS search selectors filter for v2.0.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		
		wp_register_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/search-placeholder-avada-public.js', '', $this->version, true ); // Put in footer

        // Grab all options
        $options = get_option( $this->plugin_name );

		$custom_text = 
			( empty($options['custom-text']) ) ? 'Search Placeholder Avada' : $options['custom-text'];	
		$search_selectors = '';

		// Localize the script with new data	
		$search_args = array(
			'search_placeholder' => $custom_text,
			'search_selectors' => apply_filters( 'search_placeholder_css_selectors', $search_selectors ),
			$this->plugin_name
		);
		wp_localize_script( $this->plugin_name, 'php_vars', $search_args );

		wp_enqueue_script( $this->plugin_name );

	}

}
