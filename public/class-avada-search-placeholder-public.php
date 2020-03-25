<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://caughtmyeye.cc
 * @since      1.0.0
 *
 * @package    Avada_Search_Placeholder
 * @subpackage Avada_Search_Placeholder/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Avada_Search_Placeholder
 * @subpackage Avada_Search_Placeholder/public
 * @author     caught my eye <mark@marklchaves.com>
 */
class Avada_Search_Placeholder_Public {

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

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Avada_Search_Placeholder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Avada_Search_Placeholder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/avada-search-placeholder-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Avada_Search_Placeholder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Avada_Search_Placeholder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_register_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/avada-search-placeholder-public.js', '', $this->version, true ); // Put in footer

        // Grab all options
        $options = get_option($this->plugin_name);

		$custom_text = 
			(empty($options['custom-text'])) ? 'Avada Search Placeholder' : $options['custom-text'];	

		// Localize the script with new data	
		$searchArgs = array(
			'search_placeholder' => $custom_text,
			$this->plugin_name
		);
		wp_localize_script( $this->plugin_name, 'php_vars', $searchArgs );

		wp_enqueue_script( $this->plugin_name );

	}

}
