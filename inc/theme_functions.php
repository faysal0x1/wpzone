<?php

function all_customizer_register($wp_customize)
{
    // Add a section for the header area
    $wp_customize->add_section('creativezone_header_area', [
        'title'       => __('Header Area', 'creativezone'),
        'description' => __('Customize the header area of your site.', 'creativezone'),
        'priority'    => 30,
    ]);

    // Add Logo to Header Area section
    $wp_customize->add_setting('creativezone_logo', [
        'default'   => get_bloginfo('template_directory') . '/img/logo.png',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'creativezone_logo', [
        'label'       => __('Logo', 'creativezone'),
        'description' => __('Upload a logo for your site.', 'creativezone'),
        'priority'    => 10,
        'section'     => 'creativezone_header_area', // Changed from 'title_tagline' to 'creativezone_header_area'
        'settings'    => 'creativezone_logo',
    ]));

    // Add settings and controls for the header area
    $wp_customize->add_setting('creativezone_header_text', [
        'default'   => __('Welcome to CreativeZone', 'creativezone'),
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('creativezone_header_text', [
        'label'   => __('Header Text', 'creativezone'),
        'section' => 'creativezone_header_area',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('creativezone_header_background_color', [
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'creativezone_header_background_color', [
        'label'   => __('Header Background Color', 'creativezone'),
        'section' => 'creativezone_header_area',
    ]));

    $wp_customize->add_setting('creativezone_header_text_color', [
        'default'   => '#000000',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'creativezone_header_text_color', [
        'label'   => __('Header Text Color', 'creativezone'),
        'section' => 'creativezone_header_area',
    ]));

    /**-----------------------
     *      Menu Position Option
     *
     *
     *------------------------**/

    $wp_customize->add_section('creativezone_menu_position', [
        'title'       => __('Menu Position', 'creativezone'),
        'description' => __('Customize the position of the main menu.', 'creativezone'),
        'priority'    => 40,
    ]);

    $wp_customize->add_setting('creativezone_menu_position', [
        'default'   => 'left_menu',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('creativezone_menu_position', [
        'label'       => __('Menu Position', 'creativezone'),
        'section'     => 'creativezone_menu_position',
        'settings'    => 'creativezone_menu_position',
        'description' => __('Select the position of the main menu.', 'creativezone'),
        'type'        => 'radio',
        'choices'     => [
            'left_menu'   => __('Left', 'creativezone'),
            'center_menu' => __('Center', 'creativezone'),
            'right_menu'  => __('Right', 'creativezone'),
        ],
    ]);

    /**-----------------------
     *  Footer Customization
     *  
     *  
     *------------------------**/

    $wp_customize->add_section('creativezone_footer_option', [
        'title'       => __('Footer Options', 'creativezone'),
        'description' => __('Customize the footer area', 'creativezone'),
        'priority'    => 120,
    ]);

    $wp_customize->add_setting('creativezone_copyright_section', [
        'default'   => '&copy; Copyright 2025 | Faysal Rahman',
        'transport' => 'refresh', // Added transport
    ]);

    $wp_customize->add_control('creativezone_copyright_section', [
        'label'       => 'Copyright Text',
        'description' => 'If you need you can update the copyright section',
        'section'     => 'creativezone_footer_option',
        'setting'     => 'creativezone_copyright_section',
        'type'        => 'text',
    ]);

}
add_action('customize_register', 'all_customizer_register');