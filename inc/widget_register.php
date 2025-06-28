<?php
function creativezone_register_widgets()
{
    // Home Sidebar (existing)
    register_sidebar([
        'name'          => __('Home Sidebar', 'creativezone'),
        'id'            => 'home-sidebar',
        'description'   => __('Widgets for the home sidebar', 'creativezone'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    // Register FOUR footer widget areas
    for ($i = 1; $i <= 4; $i++) {
        register_sidebar([
            'name'          => sprintf(__('Footer Widget Area %d', 'creativezone'), $i),
            'id'            => 'footer-' . $i,
            'description'   => sprintf(__('Widgets for Footer Area %d', 'creativezone'), $i),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ]);
    }
}
add_action('widgets_init', 'creativezone_register_widgets');
