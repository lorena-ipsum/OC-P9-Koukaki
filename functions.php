<?php
// Enqueue les styles du thème parent et du thème enfant
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    // Enqueue le style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Enqueue le style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/styles.css', array('parent-style'), wp_get_theme()->get('Version'));
}

// Synchronise les options du customizer entre le thème parent et le thème enfant
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function($value, $old_value) {
        // Met à jour les options du thème parent avec celles du thème enfant
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // Empêche la mise à jour des options du thème enfant
    }, 10, 2);

    add_filter('pre_option_theme_mods_' . get_stylesheet(), function($default) {
        // Retourne les options du thème parent par défaut
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// Enqueue les scripts, y compris jQuery et les scripts personnalisés
function my_theme_enqueue_scripts() {
    // Enqueue jQuery inclus avec WordPress
    wp_enqueue_script('jquery');

    // Enqueue votre propre fichier JavaScript
    wp_enqueue_script('my-theme-script', esc_url(get_stylesheet_directory_uri() . '/js/my-script.js'), array('jquery'), null, true);

    // Enqueue Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // Enqueue Swiper CSS (si nécessaire)
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
?>
