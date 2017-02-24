<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.cubetech.ch
 * @since      1.0.0
 *
 * @package    Cubetech_Simple_Yt_Videos
 * @subpackage Cubetech_Simple_Yt_Videos/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cubetech_Simple_Yt_Videos
 * @subpackage Cubetech_Simple_Yt_Videos/includes
 * @author     cubetech GmbH <info@cubetech.ch>
 */
class Cubetech_Simple_Yt_Videos_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cubetech-simple-yt-videos',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
