<?php
/**
 * Default theme setup
 *
 * @package creativezone
 */
// Theme Title
add_theme_support('title-tag');

// Add Thumbnails support
add_theme_support('post-thumbnails', [
    'post',
    'page',
    'creativezone_service'
]);

add_image_size('post-thumbnails', 970, 350, true);

// Excerpt to 40 word

function creativezone_excerpt_more($length)
{
    return '...';
}

add_filter('excerpt_more', 'creativezone_excerpt_more');

function creativezone_excerpt_length($length)
{
    return 20;
}

add_filter('excerpt_length', 'creativezone_excerpt_length');

// Page Navigation

function creativezone_set_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'creativezone_set_posts_per_page');

function creativezone_pagenav() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links([
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $wp_query->max_num_pages,
        'prev_text' => __('&laquo; Previous', 'creativezone'),
        'next_text' => __('Next &raquo;', 'creativezone'),
    ]);
}