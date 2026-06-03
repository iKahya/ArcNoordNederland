<?php
// Scripts en styles
function theme_scripts() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Theme setup
function mijn_theme_setup() {
    // Thumbnails
    add_theme_support('post-thumbnails');

    // Custom logo
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'mijn-theme'),
    ]);

    // Title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mijn_theme_setup');