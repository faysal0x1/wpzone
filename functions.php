<?php

/**
 * Theme functions and definitions.
 *
 * @package wpzone
 */

// Theme Title

require_once get_template_directory() . '/inc/default.php';

// Enqueue styles and scripts
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Load theme helper functions
 */
require_once get_template_directory() . '/inc/helpers.php';

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

require_once get_template_directory() . '/inc/theme_functions.php';

// Menu Registration
function wp_zone_register_menus()
{
    register_nav_menus([
        'main_menu'   => __('Main Menu', 'wpzone'),
        'footer_menu' => __('Footer Menu', 'wpzone'),
    ]);
}
add_action('init', 'wp_zone_register_menus');

// Call Bootstrap5 Nav Walker
require_once get_template_directory() . '/inc/Bootstrap5_Nav_Walker.php';

// Widget Registration
require_once get_template_directory() . '/inc/widget_register.php';

// Customizer Settings
require_once get_template_directory() . '/inc/customizer.php';

require_once get_template_directory() . '/inc/custom_post.php';

function wpzone_footer_layout_body_class($classes)
{
    $layout    = get_theme_mod('footer_widgets_layout', '4');
    $classes[] = 'footer-layout-' . $layout;
    return $classes;
    
    
}
add_filter('body_class', 'wpzone_footer_layout_body_class');
