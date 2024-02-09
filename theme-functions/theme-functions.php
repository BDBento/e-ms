<?php

function add_theme_scripts(){

    wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery.js', array('jquery'),'3.7.1', true );
    
    wp_enqueue_script('maior_menor', get_template_directory_uri().'/assets/js/maior_menor.js', array('jquery'),'3.6.0' );

    wp_enqueue_script( 'contrast', get_template_directory_uri().'/assets/js/contrast.js',true );

    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'bootstrap-buble-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );






// Add theme support for post thumbnails    
add_theme_support( 'post-thumbnails' );

// Add theme support for custom headers
add_theme_support( 'custom-header' );

// Add theme support for custom backgrounds
add_theme_support( 'custom-background' );

// Add theme support for automatic feed links
add_theme_support( 'automatic-feed-links' );

// Add theme support for post formats
add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

// Add theme support for custom logo
add_theme_support( 'custom-logo' );

// Add theme support for HTML5
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// Add theme support for title tag
add_theme_support( 'title-tag' );

// Add theme support for custom editor style
add_editor_style( 'editor-style.css' );

// Add theme support for selective refresh for widgets
add_theme_support( 'customize-selective-refresh-widgets' );

// Add theme support for custom navigation menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'theme-text-domain' ),
    'footer' => __( 'Footer Menu', 'theme-text-domain' ),
) );