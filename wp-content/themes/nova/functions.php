<?php
/**
 * Functions and definitions
 *
 * @package Šiša pangma
 */

/**
 * Enqueue theme styles
 */
function your_theme_enqueue_scripts() {
    wp_enqueue_style( 
        'theme-style', 
        get_stylesheet_uri(), 
        array(), 
        wp_get_theme()->get( 'Version' ), 
        'all' 
    );

    wp_enqueue_script( 
        'theme-script', 
        get_template_directory_uri() . '/script/script.js', 
        array('jquery'),
        wp_get_theme()->get( 'Version' ), 
        true
    );
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );
?>