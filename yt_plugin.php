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