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

// Page Navigation

function wpzone_set_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', 5);
    }
}
add_action('pre_get_posts', 'wpzone_set_posts_per_page');

function wpzone_pagenav() {
    if (is_singular()) {
        return;
    }

    global $wp_query, $wp_rewrite;

    if (! $wp_query->max_num_pages || $wp_query->max_num_pages < 2) {
        return;
    }

    $big = 999999999;
    $args = array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $wp_query->max_num_pages,
        'prev_text' => __('&laquo; Previous', 'wpzone'),
        'next_text' => __('Next &raquo;', 'wpzone'),
        'type'      => 'list',
        'mid_size'  => 2,
        'end_size'  => 1
    );

    $pagination = paginate_links($args);
    
    // Add Bootstrap classes to the pagination
    $pagination = str_replace("<ul class='page-numbers'>", "<ul class='pagination justify-content-center'>", $pagination);
    $pagination = str_replace('<li>', '<li class="page-item">', $pagination);
    $pagination = str_replace("page-numbers", "page-link", $pagination);
    $pagination = str_replace("<span aria-current='page' class='page-numbers current'>", "<a href='#' class='page-link active' aria-current='page'>", $pagination);
    $pagination = str_replace("</span>", "</a>", $pagination);
    
    echo $pagination;
}


function wpzone_register_sidebar()
{
    register_sidebar([
        'name'          => __('Home Sidebar', 'wpzone'),
        'id'            => 'home-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}