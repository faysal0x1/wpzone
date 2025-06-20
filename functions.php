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

// Google Fonts Enqueue
function wp_zone_google_fonts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', false);
}

add_action('wp_enqueue_scripts', 'wp_zone_google_fonts');

// Theme Support
function wp_zone_theme_support()
{
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Add support for HTML5 markup
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'wp_zone_theme_support');

// Theme functions

function all_customizer_register($wp_customize)
{
    // Add a section for the header area
    $wp_customize->add_section('wpzone_header_area', [
        'title'       => __('Header Area', 'wpzone'),
        'description' => __('Customize the header area of your site.', 'wpzone'),
        'priority'    => 30,
    ]);

    // Add Logo to Header Area section
    $wp_customize->add_setting('wpzone_logo', [
        'default'   => get_bloginfo('template_directory') . '/img/logo.png',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wpzone_logo', [
        'label'       => __('Logo', 'wpzone'),
        'description' => __('Upload a logo for your site.', 'wpzone'),
        'priority'    => 10,
        'section'     => 'wpzone_header_area', // Changed from 'title_tagline' to 'wpzone_header_area'
        'settings'    => 'wpzone_logo',
    ]));

    // Add settings and controls for the header area
    $wp_customize->add_setting('wpzone_header_text', [
        'default'   => __('Welcome to WPZone', 'wpzone'),
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('wpzone_header_text', [
        'label'   => __('Header Text', 'wpzone'),
        'section' => 'wpzone_header_area',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('wpzone_header_background_color', [
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpzone_header_background_color', [
        'label'   => __('Header Background Color', 'wpzone'),
        'section' => 'wpzone_header_area',
    ]));

    $wp_customize->add_setting('wpzone_header_text_color', [
        'default'   => '#000000',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpzone_header_text_color', [
        'label'   => __('Header Text Color', 'wpzone'),
        'section' => 'wpzone_header_area',
    ]));

    /**-----------------------
     *      Menu Position Option
     *
     *
     *------------------------**/

    $wp_customize->add_section('wpzone_menu_position', [
        'title'       => __('Menu Position', 'wpzone'),
        'description' => __('Customize the position of the main menu.', 'wpzone'),
        'priority'    => 40,
    ]);

    $wp_customize->add_setting('wpzone_menu_position', [
        'default'   => 'left_menu',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('wpzone_menu_position', [
        'label'       => __('Menu Position', 'wpzone'),
        'section'     => 'wpzone_menu_position',
        'settings'    => 'wpzone_menu_position',
        'description' => __('Select the position of the main menu.', 'wpzone'),
        'type'        => 'radio',
        'choices'     => [
            'left_menu'   => __('Left', 'wpzone'),
            'center_menu' => __('Center', 'wpzone'),
            'right_menu'  => __('Right', 'wpzone'),
        ],
    ]);

    /**-----------------------
     *  Footer Customization
     *  
     *  
     *------------------------**/

    $wp_customize->add_section('wpzone_footer_option', [
        'title'       => __('Footer Options', 'wpzone'),
        'description' => __('Customize the footer area', 'wpzone'),
        'priority'    => 120,
    ]);

    $wp_customize->add_setting('wpzone_copyright_section', [
        'default'   => '&copy; Copyright 2025 | Faysal Rahman',
        'transport' => 'refresh', // Added transport
    ]);

    $wp_customize->add_control('wpzone_copyright_section', [
        'label'       => 'Copyright Text',
        'description' => 'If you need you can update the copyright section',
        'section'     => 'wpzone_footer_option',
        'setting'     => 'wpzone_copyright_section',
        'type'        => 'text',
    ]);

}
add_action('customize_register', 'all_customizer_register');

// Menu Registration

// function wp_zone_register_menus()
// {
//     register_nav_menus([
//         'primary' => __('Primary Menu', 'wpzone'),
//         'footer'  => __('Footer Menu', 'wpzone'),
//     ]);
// }
// add_action('init', 'wp_zone_register_menus');

register_nav_menu('main_menu', __('Main Menu', 'wpzone'));

// Call Bootstrap5 Nav Walker
require_once get_template_directory() . '/Bootstrap5_Nav_Walker.php';