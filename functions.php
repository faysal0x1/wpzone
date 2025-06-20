<?php

/**
 * Theme functions and definitions.
 *
 * @package wpzone
 */

// Theme Title
add_theme_support('title-tag');

// Theme Css and Jquery Js file calling

function wp_zone_css_js_file_calling()
{
    // Enqueue Styles
    wp_enqueue_style('wpzone-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri()
        . '/css/bootstrap.min.css', [], '5.0.0', 'all');

    wp_enqueue_style('bootstrap');

    // Import this css from Lib

    wp_register_style('font-awesome', get_template_directory_uri()
        . '/lib/font-awesome/font-awesome.min.css', [], '5.0.0', 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('bootstrap-icon', get_template_directory_uri()
        . '/lib/bootstrap-icons/bootstrap-icons.css', [], '1.0.0', 'all');
    wp_enqueue_style('bootstrap-icon');

    wp_register_style('animate-css', get_template_directory_uri()
        . '/lib/animate/animate.min.css', [], '1.0.0', 'all');
    wp_enqueue_style('animate-css');
    wp_register_style('lightbox-css', get_template_directory_uri()
        . '/lib/lightbox/css/lightbox.min.css', [], '1.0.0', 'all');
    wp_enqueue_style('lightbox-css');
    wp_register_style('owlcarousel-css', get_template_directory_uri()
        . '/lib/owlcarousel/assets/owl.carousel.min.css', [], '1.0.0', 'all');
    wp_enqueue_style('owlcarousel-css');

    // Custom CSS
    wp_register_style('custom-style', get_template_directory_uri()
        . '/css/style.css', [], '1.0.0', 'all');
    wp_enqueue_style('custom-style');

    // Jquery
    wp_enqueue_script('jquery');

    // Enqueue Scripts
    wp_register_script('bootstrap-js', get_template_directory_uri()
        . '/js/bootstrap.min.js', ['jquery'], '5.0.0', true);

    wp_enqueue_script('bootstrap-js');

    // Import library from lib
    wp_register_script('wow-js', get_template_directory_uri()
        . '/lib/wow/wow.min.js', ['jquery'], '1.0.0', true);

    wp_enqueue_script('wow-js');
    wp_register_script('easing-js', get_template_directory_uri()
        . '/lib/easing/easing.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('easing-js');
    wp_register_script('waypoints-js', get_template_directory_uri()
        . '/lib/waypoints/waypoints.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('waypoints-js');
    wp_register_script('typed-js', get_template_directory_uri()
        . '/lib/typed/typed.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('typed-js');
    wp_register_script('counterup-js', get_template_directory_uri()
        . '/lib/counterup/counterup.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('counterup-js');
    wp_register_script('owlcarousel-js', get_template_directory_uri()
        . '/lib/owlcarousel/owl.carousel.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('owlcarousel-js');
    wp_register_script('isotope-js', get_template_directory_uri()
        . '/lib/isotope/isotope.pkgd.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('isotope-js');
    wp_register_script('lightbox-js', get_template_directory_uri()
        . '/lib/lightbox/js/lightbox.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('lightbox-js');
    // Main JS
    wp_register_script('main-js', get_template_directory_uri()
        . '/js/main.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('main-js');

}

add_action('wp_enqueue_scripts', 'wp_zone_css_js_file_calling');