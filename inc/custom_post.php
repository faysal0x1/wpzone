<?php

/**
 * Register custom post types
 *
 * @package creativezone
 */

// Custom post types should be under Theme name in dashboard sidebar menu

// first create sidebar menu item
function creativezone_register_custom_service()
{
    register_post_type("creativezone_service", [
        "labels" => [
            'name'          => __('Service'),
            'singular_name' => __('Service'),
            'add_new'       => __('Add New Service'),
            'add_new_item'  => __('Add new Service'),
            'edit_item'=>__('Edit Service'),
            'new_item'=>__('New Service'),
            'view_item'=>__('View Service'),
            'not_found'=>__('Sorry, No item Found'),
        ],

        'menu_icon'=>'dashicons-cover-image',
        'public'=>true,
        'publicly_queryable'=>true,
        'exclude_from_search'=>false,
        'menu_position'=>5,
        'has_archive'=>true,
        'hierarchial'=>true,
        'show_ui'=>true,
        'capability_type'=>'post',
        'rewrite'=>['slug'=>'service'],
        'supports'=>['title','thumbnail','editor','excerpt']

    ]);

}

add_action('init', 'creativezone_register_custom_service');


// Add this after your custom post type registration
function creativezone_add_service_metabox() {
    add_meta_box(
        'creativezone_service_icon',
        __('Service Icon'),
        'creativezone_service_icon_callback',
        'creativezone_service',
        'side'
    );
}
add_action('add_meta_boxes', 'creativezone_add_service_metabox');

function creativezone_service_icon_callback($post) {
    wp_nonce_field('creativezone_service_icon_nonce', 'creativezone_service_icon_nonce');
    $icon = get_post_meta($post->ID, '_service_icon', true);
    echo '<input type="text" name="service_icon" value="' . esc_attr($icon) . '" class="widefat">';
    echo '<p class="description">Enter a Dashicon class (e.g. dashicons-admin-tools)</p>';
}

function creativezone_save_service_icon($post_id) {
    if (!isset($_POST['creativezone_service_icon_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['creativezone_service_icon_nonce'], 'creativezone_service_icon_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['service_icon'])) {
        update_post_meta($post_id, '_service_icon', sanitize_text_field($_POST['service_icon']));
    }
}
add_action('save_post', 'creativezone_save_service_icon');