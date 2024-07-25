<?php
/*
Plugin Name: QuickTags Demo
Plugin URI: https://redoyit.com/
Description: Used by millions, WordCount is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. WordCount Anti-spam keeps your site protected even while you sleep. To get started: activate the WordCount plugin and then go to your WordCount Settings page to set up your API key.
Version: 5.3
Requires at least: 5.8
Requires PHP: 5.6.20
Author: Md. Redoy Islam
Author URI: https://redoyit.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: quicktagsdemo
Domain Path: /languages
*/
function gstd_assets($screen){
    if('post.php' == $screen){
        wp_enqueue_script('gtsd-main',plugin_dir_url(__FILE__).'/assets/js/qt.js', array('quicktags','thickbox'), 1.0, true);
        wp_localize_script('gtsd-main', 'gtsd', array('preview'=>plugin_dir_url(__FILE__).'/fap.php'));
    }
}
add_action('admin_enqueue_scripts', 'gstd_assets');