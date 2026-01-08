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

// Custom Post Type: Projects
function wp_custom_projects_cpt() {
    register_post_type('project', array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'wp_custom_projects_cpt');

// Register Sidebar
function wp_custom_sidebar() {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
    ));
}
add_action('widgets_init', 'wp_custom_sidebar');
