<?php

// Adding the CSS and JS files

function wp_setup()
{
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Roboto&family=Roboto+Condensed&family=Roboto+Slab&display=swap');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/6409d82844.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'wp_setup');

// Adding Theme Support

function learnwp_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'learnwp_init');

// Sales Post Type

function products_post_type()
{
    register_post_type(
        'product',
        array(
            'rewrite' => array('slug' => 'products'),
            'labels' => array(
                'name' => 'Products',
                'singular_name' => 'Product',
                'add_new_item' => 'Add New Product',
                'edit_item' => 'Edit Product'
            ),
            'menu-icon' => 'dashicons-products',         //https://developer.wordpress.org/resource/dashicons/#superhero-alt
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}

add_action('init', 'products_post_type');