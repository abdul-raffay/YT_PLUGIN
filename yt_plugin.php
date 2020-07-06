<?php 
/** 
 * Plugin Name: Youtube Plugin
 * Description: Youtube Plugin watching tutorials from Traversy Media
 * Version: 0.1.0
 * Author: Abdul Raffay
*/

// Exit if Access Directly by URL by writing path in a URL
if(!defined('ABSPATH')){
    exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/inc/yt_subs_script.php');

// Load Class
require_once(plugin_dir_path(__FILE__) . '/inc/yt_subs-class.php');

// Register Widget
function register_youtube_subs(){
    // Class Name from class file
    register_widget('Youtube_Subs_Widget');
}

// Hook in Function
add_action('widgets_init', 'register_youtube_subs');