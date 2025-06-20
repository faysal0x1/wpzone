<?php

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