<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/scss/theme.css' );
    wp_enqueue_script('menuBurger-script', get_template_directory_uri() . '/assets/js/modules/menuBurger.js', array('jquery'), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}
function registerMenus()
{
    register_nav_menus(
        array(
            'main' => __('Header'),
        )
    );
}
add_action('after_setup_theme', 'registerMenus');