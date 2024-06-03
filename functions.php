<?php
// Enqueue parent and child theme styles
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/styles.css', array('parent-style'), wp_get_theme()->get('Version') );
}

// Synchronize customizer options between parent and child themes
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );

    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// Enqueue scripts including jQuery and custom scripts
function my_theme_enqueue_scripts() {
    // Enqueue jQuery included with WordPress
    wp_enqueue_script('jquery');

    // Enqueue your own JavaScript file
    wp_enqueue_script('my-theme-script', get_stylesheet_directory_uri() . '/js/my-script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


