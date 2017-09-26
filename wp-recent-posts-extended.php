<?php

/**
 * WP Recent Posts Extended
 *
 * @link              https://vicentegarcia.com
 * @since             1.0.0
 * @package           WP_Recent_Posts_Extended
 *
 * @wordpress-plugin
 * Plugin Name:       WP Recent Posts Extended
 * Plugin URI:        https://wordpress.org/plugins/wp-recent-posts-extended/
 * Description:       A simple widget for displaying recent posts by category.
 * Version:           1.1.2
 * Author:            Vicente Garcia
 * Author URI:        https://vicentegarcia.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-recent-posts-extended
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Function to register widget
 */

function wprpe_create_widget(){
    include_once(plugin_dir_path( __FILE__ ).'/inc/wprpe.php');
    register_widget('wprpe');
}
add_action('widgets_init','wprpe_create_widget');

