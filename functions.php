<?php

/**
 * Theme functions and definitions.
 *
 * @package creativezone
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
function creativezone_google_fonts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', false);
}

add_action('wp_enqueue_scripts', 'creativezone_google_fonts');

// Theme Support
function creativezone_theme_support()
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
    
    // Add support for title tag
    add_theme_support('title-tag');
    
    // Add support for automatic feed links
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'creativezone_theme_support');

// Theme functions

require_once get_template_directory() . '/inc/theme_functions.php';

// Menu Registration
function creativezone_register_menus()
{
    register_nav_menus([
        'main_menu'   => __('Main Menu', 'creativezone'),
        'footer_menu' => __('Footer Menu', 'creativezone'),
    ]);
}
add_action('init', 'creativezone_register_menus');

// Call Bootstrap5 Nav Walker
require_once get_template_directory() . '/inc/Bootstrap5_Nav_Walker.php';

// Widget Registration
require_once get_template_directory() . '/inc/widget_register.php';

// Customizer Settings
require_once get_template_directory() . '/inc/customizer.php';

// Note: Custom post types and shortcodes are not allowed in WordPress.org themes
// They should be implemented via plugins instead

function creativezone_footer_layout_body_class($classes)
{
    $layout    = get_theme_mod('creativezone_footer_widgets_layout', '4');
    $classes[] = 'footer-layout-' . $layout;
    return $classes;
    
    
}
add_filter('body_class', 'creativezone_footer_layout_body_class');