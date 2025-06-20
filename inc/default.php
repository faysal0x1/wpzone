<?php
/**
 * Default theme setup
 *
 * @package wpzone
 */
// Theme Title
add_theme_support('title-tag');

// Add Thumbnails support
add_theme_support('post-thumbnails', [
    'post',
    'page',
]);

add_image_size('post-thumbnails', 970, 350, true);

// Excerpt to 40 word

function wpzone_excerpt_more($length)
{
    return '<br><br><a href="' . get_permalink(get_the_ID()) . '" class="btn btn-primary btn-sm mt-2 mb-2 mx-4">Read More</a>';
}

add_filter('excerpt_more', 'wpzone_excerpt_more');

function wpzone_excerpt_length($length)
{
    return 40; // Set the excerpt length to 40 words
}

add_filter('excerpt_length', 'wpzone_excerpt_length');