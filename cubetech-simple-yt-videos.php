<?php

/**
 *
 * @link              https://www.cubetech.ch
 * @since             1.0.0
 * @package           Cubetech_Simple_Yt_Videos
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Responsive Youtube Videos
 * Plugin URI:        https://github.com/cubetech/wpplugin.cubetech-simple-yt-videos
 * Description:       This plugin filters the content and modify the Youtube videos to be responsive
 * Version:           1.0.0
 * Author:            cubetech GmbH
 * Author URI:        https://www.cubetech.ch
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cubetech-simple-yt-videos
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cubetech-simple-yt-videos-activator.php
 */
function activate_cubetech_simple_yt_videos() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cubetech-simple-yt-videos-activator.php';
	Cubetech_Simple_Yt_Videos_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cubetech-simple-yt-videos-deactivator.php
 */
function deactivate_cubetech_simple_yt_videos() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cubetech-simple-yt-videos-deactivator.php';
	Cubetech_Simple_Yt_Videos_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cubetech_simple_yt_videos' );
register_deactivation_hook( __FILE__, 'deactivate_cubetech_simple_yt_videos' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cubetech-simple-yt-videos.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cubetech_simple_yt_videos() {

	$plugin = new Cubetech_Simple_Yt_Videos();
	$plugin->run();

}
run_cubetech_simple_yt_videos();
