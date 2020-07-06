<?php

// Add Scripts
function yts_add_scripts(){
    // Add Main CSS
    wp_enqueue_style( "yts_main_style", plugins_url() . '/yt_plugin/css/style.css' );
    // Add Main JS
    wp_enqueue_script( "yts_main_script", plugins_url() . '/yt_plugin/js/main.js' );

    // Add Google Scripts
    wp_register_script( "google", 'https://apis.google.com/js/platform.js' );
    wp_enqueue_script( "google" );
}

add_action( "wp_enqueue_scripts", "yts_add_scripts" );