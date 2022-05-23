<?php
// Ajouter des fonctions parti admin
function addThemeSetup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menu('main', 'menu_principal');
}

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
