<?php

/**
 * Enqueue styles and scripts for the theme
 *
 * @package wpzone
 */

// Theme Css and Jquery Js file calling

function wp_zone_css_js_file_calling()
{
    // Enqueue Styles
    wp_enqueue_style('wpzone-style', get_stylesheet_uri());
    
    // Custom Bootstrap CSS (compiled from SCSS)
    wp_register_style('bootstrap-custom', get_template_directory_uri()
        . '/css/bootstrap-custom.css', [], '1.0.0', 'all');
    wp_enqueue_style('bootstrap-custom');

    // Bootstrap Icons (for icons in header, footer, and 404 page)
    wp_register_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css', [], '1.11.0', 'all');
    wp_enqueue_style('bootstrap-icons');

    // Jquery
    wp_enqueue_script('jquery');

    // Enqueue Scripts
    wp_register_script('bootstrap-js', get_template_directory_uri()
        . '/js/bootstrap.min.js', ['jquery'], '5.0.0', true);
    wp_enqueue_script('bootstrap-js');

    // Typed.js (used in 404.php)
    wp_register_script('typed-js', get_template_directory_uri()
        . '/lib/typed/typed.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('typed-js');

    // Main JS
    wp_register_script('main-js', get_template_directory_uri()
        . '/js/main.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('main-js');

    // Customizer Js
    wp_register_script('customizer-js', get_template_directory_uri()
        . '/js/customizer.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('customizer-js');

}
add_action('wp_enqueue_scripts', 'wp_zone_css_js_file_calling');