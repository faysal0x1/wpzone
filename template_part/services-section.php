<?php
/**
 * Services Section Template
 * 
 * @package creativezone
 */

// This template is for demonstration purposes only
// In a real implementation, you would use regular posts or pages
// Custom post types should be implemented via plugins for WordPress.org themes

$services_query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'category_name'  => 'services', // Use a regular category instead
    'order'          => 'ASC',
    'orderby'        => 'title',
]);

if ($services_query->have_posts()) : ?>
<section id="services_area" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2><?php _e('Our Services', 'creativezone'); ?></h2>
                <p class="lead"><?php _e('What we can do for you', 'creativezone'); ?></p>
            </div>
        </div>
        <div class="row">
            <?php while ($services_query->have_posts()) : $services_query->the_post(); ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="card-img-top">
                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                    </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                            <?php _e('Learn More', 'creativezone'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php 
endif;
wp_reset_postdata();
?>