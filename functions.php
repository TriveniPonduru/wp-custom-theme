<?php
// Theme setup
function wp_custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wp_custom_theme_setup');

// Enqueue styles and scripts
function wp_custom_theme_assets() {
    wp_enqueue_style(
        'wp-custom-style',
        get_stylesheet_uri()
    );

    wp_enqueue_script(
        'wp-custom-script',
        get_template_directory_uri() . '/script.js',
        array(),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'wp_custom_theme_assets');
