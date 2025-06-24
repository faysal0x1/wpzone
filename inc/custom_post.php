<?php

/**
 * Register custom post types
 *
 * @package wpzone
 */

// Custom post types should be under Theme name in dashboard sidebar menu

// first create sidebar menu item
function wpzone_register_custom_service()
{
    register_post_type("wpzone_service", [
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
        'supports'=>['title','thumbnail','editor']

    ]);

}

add_action('init', 'wpzone_register_custom_service');
