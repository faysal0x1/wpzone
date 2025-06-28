<?php
function creativezone_footer_customizer($wp_customize) {
    // Add Footer Section
    $wp_customize->add_section('footer_section', [
        'title'    => __('Footer Settings', 'creativezone'),
        'priority' => 120,
    ]);

    // Footer Background Color
    $wp_customize->add_setting('footer_background_color', [
        'default'           => '#12141D',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ]);
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background_color', [
        'label'    => __('Footer Background Color', 'creativezone'),
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
        'label'    => __('Footer Text Color', 'creativezone'),
        'section'  => 'footer_section',
        'settings' => 'footer_text_color',
    ]));

    // Footer Bottom Background Color
    $wp_customize->add_setting('footer_bottom_background_color', [
        'default'           => 'rgba(0, 0, 0, 0.2)',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ]);
    
    $wp_customize->add_control('footer_bottom_background_color', [
        'label'    => __('Footer Bottom Background Color', 'creativezone'),
        'section'  => 'footer_section',
        'type'     => 'text',
        'description' => __('Use CSS color values like: rgba(0, 0, 0, 0.2) or #000000', 'creativezone'),
    ]);
    
    // Footer Widgets Layout
    $wp_customize->add_setting('footer_widgets_layout', [
        'default'           => '4',
        'sanitize_callback' => 'creativezone_sanitize_footer_layout',
    ]);
    
    $wp_customize->add_control('footer_widgets_layout', [
        'label'    => __('Footer Widgets Layout', 'creativezone'),
        'section'  => 'footer_section',
        'type'     => 'select',
        'choices'  => [
            '1' => __('1 Column', 'creativezone'),
            '2' => __('2 Columns', 'creativezone'),
            '3' => __('3 Columns', 'creativezone'),
            '4' => __('4 Columns', 'creativezone'),
        ],
    ]);
    
    // Footer Description
    $wp_customize->add_setting('footer_description', [
        'default'           => 'We are a creative team passionate about delivering exceptional digital experiences and innovative solutions for our clients.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ]);
    
    $wp_customize->add_control('footer_description', [
        'label'    => __('Footer Description', 'creativezone'),
        'section'  => 'footer_section',
        'type'     => 'textarea',
        'description' => __('This text appears in the footer when no widgets are active.', 'creativezone'),
    ]);

    // Social Media Section
    $wp_customize->add_section('social_media_section', [
        'title'    => __('Social Media Links', 'creativezone'),
        'priority' => 125,
    ]);

    // Facebook
    $wp_customize->add_setting('social_facebook', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    
    $wp_customize->add_control('social_facebook', [
        'label'    => __('Facebook URL', 'creativezone'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ]);

    // Twitter
    $wp_customize->add_setting('social_twitter', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    
    $wp_customize->add_control('social_twitter', [
        'label'    => __('Twitter URL', 'creativezone'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ]);

    // Instagram
    $wp_customize->add_setting('social_instagram', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    
    $wp_customize->add_control('social_instagram', [
        'label'    => __('Instagram URL', 'creativezone'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ]);

    // LinkedIn
    $wp_customize->add_setting('social_linkedin', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    
    $wp_customize->add_control('social_linkedin', [
        'label'    => __('LinkedIn URL', 'creativezone'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ]);

    // YouTube
    $wp_customize->add_setting('social_youtube', [
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    
    $wp_customize->add_control('social_youtube', [
        'label'    => __('YouTube URL', 'creativezone'),
        'section'  => 'social_media_section',
        'type'     => 'url',
    ]);

    // Contact Information Section
    $wp_customize->add_section('contact_info_section', [
        'title'    => __('Contact Information', 'creativezone'),
        'priority' => 130,
    ]);

    // Contact Address
    $wp_customize->add_setting('contact_address', [
        'default'           => '123 Business Street, New York, NY 10001',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    
    $wp_customize->add_control('contact_address', [
        'label'    => __('Contact Address', 'creativezone'),
        'section'  => 'contact_info_section',
        'type'     => 'text',
    ]);

    // Contact Phone
    $wp_customize->add_setting('contact_phone', [
        'default'           => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    
    $wp_customize->add_control('contact_phone', [
        'label'    => __('Contact Phone', 'creativezone'),
        'section'  => 'contact_info_section',
        'type'     => 'text',
    ]);

    // Contact Email
    $wp_customize->add_setting('contact_email', [
        'default'           => 'info@example.com',
        'sanitize_callback' => 'sanitize_email',
    ]);
    
    $wp_customize->add_control('contact_email', [
        'label'    => __('Contact Email', 'creativezone'),
        'section'  => 'contact_info_section',
        'type'     => 'email',
    ]);
    
    // Copyright Text
    $wp_customize->add_setting('footer_copyright_text', [
        'default'           => sprintf(__('© %s %s. All Rights Reserved.', 'creativezone'), date('Y'), get_bloginfo('name')),
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'postMessage',
    ]);
    
    $wp_customize->add_control('footer_copyright_text', [
        'label'    => __('Copyright Text', 'creativezone'),
        'section'  => 'footer_section',
        'type'     => 'textarea',
    ]);
}
add_action('customize_register', 'creativezone_footer_customizer');

// Sanitize footer layout option
function creativezone_sanitize_footer_layout($input) {
    $valid = ['1', '2', '3', '4'];
    if (in_array($input, $valid)) {
        return $input;
    }
    return '4';
}