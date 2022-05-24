<?php

function montheme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menu('main', 'menu_principal');
}

function montheme_scripts()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
}
function montheme_custom_types()
{
    register_post_type('boardgame', [
        'labels' => [
            'name' => 'Boardgames',
            'singular_name' => 'Boardgame'
        ],
        'public' => true,
        'has_archive' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-buddicons-activity',
        'show_in_rest' => true,
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'has_archive' => true,
        'taxonomies' => ['gameCats']
    ]);
}
function montheme_custom_taxonomies()
{
    register_taxonomy('gameCats', 'boardgame', [
        'labels' => [
            'name' => 'gameCats',
            'singular_name' => 'gameCat',
        ],
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'default_term' => 'Uncategorised',
    ]);
}

function montheme_menu_cls($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_atts($attributes)
{
    $attributes['class'] = 'nav-link';
    return $attributes;
}


add_action('after_setup_theme', 'montheme_setup');
add_action('init', 'montheme_custom_types');
add_action('init', 'montheme_custom_taxonomies');
add_action('wp_enqueue_scripts', 'montheme_scripts');
add_filter('nav_menu_css_class', 'montheme_menu_cls');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_atts');