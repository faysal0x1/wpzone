<?php
function wpzone_register_widgets()
{
    // Home Sidebar (existing)
    register_sidebar([
        'name'          => __('Home Sidebar', 'wpzone'),
        'id'            => 'home-sidebar',
        'description'   => __('Widgets for the home sidebar', 'wpzone'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    // Register FOUR footer widget areas
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar([
            'name'          => sprintf(__('Footer Widget Area %d', 'wpzone'), $i),
            'id'            => 'footer-' . $i,
            'description'   => sprintf(__('Widgets for Footer Area %d', 'wpzone'), $i),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ]);
    }
}
add_action('widgets_init', 'wpzone_register_widgets');
