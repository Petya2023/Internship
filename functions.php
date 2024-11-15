<?php
function storefront_child_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child_style', get_theme_file_uri('assets/dist/main.css'));
}
add_action('wp_enqueue_scripts', 'storefront_child_theme_enqueue_styles');