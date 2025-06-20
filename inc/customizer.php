<?php
function wpzone_footer_customizer($wp_customize) {
    // Footer Background Color
    $wp_customize->add_setting('footer_background_color', [
        'default'           => '#222222',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ]);
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background_color', [
        'label'    => __('Footer Background Color', 'wpzone'),
        'section'  => 'footer_section',
        'settings' => 'footer_background_color',
    ]));
    
    // Footer Text Color
    $wp_customize->add_setting('footer_text_color', [
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ]);
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color', [
        'label'    => __('Footer Text Color', 'wpzone'),
        'section'  => 'footer_section',
        'settings' => 'footer_text_color',
    ]));
    
    // Footer Widgets Layout
    $wp_customize->add_setting('footer_widgets_layout', [
        'default'           => '4',
        'sanitize_callback' => 'wpzone_sanitize_footer_layout',
    ]);
    
    $wp_customize->add_control('footer_widgets_layout', [
        'label'    => __('Footer Widgets Layout', 'wpzone'),
        'section'  => 'footer_section',
        'type'     => 'select',
        'choices'  => [
            '1' => __('1 Column', 'wpzone'),
            '2' => __('2 Columns', 'wpzone'),
            '3' => __('3 Columns', 'wpzone'),
            '4' => __('4 Columns', 'wpzone'),
        ],
    ]);
    
    // Copyright Text
    $wp_customize->add_setting('footer_copyright_text', [
        'default'           => sprintf(__('Copyright &copy; %s. All Rights Reserved.', 'wpzone'), date('Y')),
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'postMessage',
    ]);
    
    $wp_customize->add_control('footer_copyright_text', [
        'label'    => __('Copyright Text', 'wpzone'),
        'section'  => 'footer_section',
        'type'     => 'textarea',
    ]);
    
    // Add Footer Section
    $wp_customize->add_section('footer_section', [
        'title'    => __('Footer Settings', 'wpzone'),
        'priority' => 120,
    ]);
}
add_action('customize_register', 'wpzone_footer_customizer');

// Sanitize footer layout option
function wpzone_sanitize_footer_layout($input) {
    $valid = ['1', '2', '3', '4'];
    if (in_array($input, $valid)) {
        return $input;
    }
    return '4';
}