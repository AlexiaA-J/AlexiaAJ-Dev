<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/scss/theme.css' );
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