<?php

// Wordpress Shortcode

function wpzone_basic_shortcode()
{
    return 'Hello World';
}

add_shortcode('wpzone_text', 'wpzone_basic_shortcode');

function wpzone_button_shortcode($atts, $content = null)
{
    $value = shortcode_atts([
        'url' => '#',
    ], $atts);

    return '<a href="' . esc_url($value['url']) . '" class="btn btn-primary">' . do_shortcode($content) . '</a>';
}
add_shortcode('wpzone_button', 'wpzone_button_shortcode');

// Short code for Custom Post

function wpzone_service_shortcode($atts)
{
    ob_start();

    //   query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post'))

    $query = new WP_Query([
        'post_type'      => 'service',
        'posts_per_page' => 3,
        'order'          => 'ASC',
        'orderby'        => 'title',
    ]);

    if ($query->have_posts()) { ?>
        <section id="service_area">
            <div class="container">
                <div class="row">
                    <?php while ($query->have_posts()): $query->the_post();
                    ?>
                        <div class="col-md-4">
                            <div class="child_service">
                                <h2><?php the_title(); ?></h2>
                                <?php echo the_post_thumbnail('service') ?>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

<?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}

add_shortcode('wpzone_service', 'wpzone_service_shortcode');
