<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.cubetech.ch
 * @since      1.0.0
 *
 * @package    Cubetech_Simple_Yt_Videos
 * @subpackage Cubetech_Simple_Yt_Videos/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cubetech_Simple_Yt_Videos
 * @subpackage Cubetech_Simple_Yt_Videos/public
 * @author     cubetech GmbH <info@cubetech.ch>
 */
class Cubetech_Simple_Yt_Videos_Public {

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
		 * defined in Cubetech_Simple_Yt_Videos_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cubetech_Simple_Yt_Videos_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cubetech-simple-yt-videos-public.css', array(), $this->version, 'all' );

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
		 * defined in Cubetech_Simple_Yt_Videos_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cubetech_Simple_Yt_Videos_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cubetech-simple-yt-videos-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Filter the content and add some div around the iframes
	 *
	 * @since 	1.0.0
	 */
	public function add_youtube_responsiveness( $content ) {

		if( is_main_query() ) {

		    // match any iframes
		    $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
		    preg_match_all($pattern, $content, $matches);

		    foreach ($matches[0] as $match) {
		        // wrap matched iframe with div
		        $wrappedframe = '<div class="cubetech-simple-yt-videos">' . $match . '</div>';

		        //replace original iframe with new in content
		        $content = str_replace($match, $wrappedframe, $content);
		    }

		}	

		return $content;

	}

}
