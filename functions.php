<?php
<<<<<<< HEAD
// Ajouter des fonctions parti admin
function addThemeSetup()
{
=======

function montheme_setup(){
>>>>>>> 69fcf56fc520b857135856e07467a2d00816a3d5
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menu('main', 'menu_principal');
}

<<<<<<< HEAD
add_action('after_setup_theme', 'addThemeSetup');

// Ajouter des styles et scripts
function addThemeScripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'addthemeScripts');

// Ajouter "boardgame" à la parti admin
function addThemeCustomTypes()
{
=======
function montheme_scripts(){
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
}
function montheme_custom_types(){
>>>>>>> 69fcf56fc520b857135856e07467a2d00816a3d5
    register_post_type('boardgame', [
        'labels' => [
            'name' => 'Boardgames',
            'singular_name' => 'Boardgame'
        ],
        'public' => true,
<<<<<<< HEAD
        'has_archive' => true,
=======
>>>>>>> 69fcf56fc520b857135856e07467a2d00816a3d5
        'menu_position' => 3,
        'menu_icon' => 'dashicons-buddicons-activity',
        'show_in_rest' => true,
        'supports' => [
<<<<<<< HEAD
            'title',
            'editor',
            'thumbnail',
        ],
        'taxonomies' => ['gamecat']

    ]);
}

add_action('init', 'addThemeCustomTypes');

// Ajouter une classe 'nav-item' au li
function addTheme_menu_cls($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_css_class', 'addTheme_menu_cls');

// Ajouter une classe 'nav-link' au a
function addTheme_menu_a($a)
{
    $a['class'] = 'nav-link';
    return $a;
}

add_filter('nav_menu_link_attributes', 'addTheme_menu_a');


// Ajouter des taxonomies à BOARDGAME
function addThemeCustomTaxonomies()
{
    register_taxonomy('gamecat', 'boardgame', [
        'labels' => [
            'name' => 'Gamecats',
            'singular_name' => 'gamecat',
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
}

add_action('init', 'addThemeCustomTaxonomies');
=======
            'title', 'editor', 'thumbnail'
        ],
        'has_archive' => true,
        'taxonomies' => ['gameCats']
    ]);
}
function montheme_custom_taxonomies(){
    register_taxonomy('gameCats', 'boardgame', [
        'labels' => [
            'name' => 'gameCats',
            'singular_name' => 'gameCat'
        ],
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'default_term' => 'Uncategorised'
    ]);
}

function montheme_menu_cls($classes){
    $classes[]= 'nav-item';
    return $classes;
}

function montheme_menu_link_atts($attributes){
    $attributes['class']= 'nav-link';
    return $attributes;
}

add_action('after_setup_theme', 'montheme_setup');
add_action('init', 'montheme_custom_types');
add_action('init', 'montheme_custom_taxonomies');
add_action('wp_enqueue_scripts', 'montheme_scripts');
add_filter('nav_menu_css_class', 'montheme_menu_cls');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_atts');
>>>>>>> 69fcf56fc520b857135856e07467a2d00816a3d5
