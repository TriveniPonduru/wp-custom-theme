<?php

function wp_custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // STEP 3 addition 👇
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'wp_custom_theme_setup');

function wp_custom_theme_assets() {
    wp_enqueue_style(
        'wp-custom-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'wp_custom_theme_assets');
