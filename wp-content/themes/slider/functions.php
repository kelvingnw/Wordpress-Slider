<?php
function my_custom_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme')
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');
function theme_enqueue_styles()
{
    wp_enqueue_style('services-style', get_template_directory_uri() . '/css/services.css');
    wp_enqueue_style('usecase-style', get_template_directory_uri() . '/css/usecase.css');
    wp_enqueue_style('intermezzo-style', get_template_directory_uri() . '/css/intermezzo.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function my_theme_scripts()
{
    // Enqueue the main theme stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue the custom JavaScript file
    wp_enqueue_script('services-js', get_template_directory_uri() . '/js/services.js', array(), null, true);
    wp_enqueue_script('intermezzo-js', get_template_directory_uri() . '/js/intermezzo.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


function create_portfolio_cpt()
{
    $args = array(
        'public' => true,
        'label'  => 'Portfolio',
        'supports' => array('title', 'editor', 'thumbnail'), // 'thumbnail' for images
        'menu_icon' => 'dashicons-portfolio', // Optional: change the icon
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt');
