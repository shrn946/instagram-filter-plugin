<?php
/*
Plugin Name: Instagram Image Filter Plugin
Description: Instagram.css is a pure CSS Instagram filters. You can add all these Instagram-like filters to your photos with using CSS only.
Version: 1.0
Author: Hassan Naqvi
*/

// Enqueue styles
function instagram_filter_enqueue_styles() {
    // Enqueue Spectre CSS
  

    // Enqueue Instagram CSS
    wp_enqueue_style('instagram', plugins_url('dist/instagram.min.css', __FILE__));
}

// Hook into WordPress
add_action('wp_enqueue_scripts', 'instagram_filter_enqueue_styles');

// Enqueue custom styles
function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', plugin_dir_url(__FILE__) . 'styles.css');
	
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// Include pageption.php
include_once(plugin_dir_path(__FILE__) . 'options-page.php');
// Include the file add-class-to-elementor-image.php
include(plugin_dir_path(__FILE__) . 'add-class-to-elementor-image.php');

