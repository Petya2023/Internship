<?php
function storefront_child_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child_style', get_theme_file_uri('assets/dist/main.css'));
    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/7033955637.js');
    wp_enqueue_script('js', get_theme_file_uri('assets/dist/script.js'), 'jquery', '1.0', true);
}
add_action('wp_enqueue_scripts', 'storefront_child_theme_enqueue_styles');

function features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'features');