<?php
$services = new WP_Query([
    'post_type' => 'wpzone_service',
    'posts_per_page' => 3,
    'order' => 'ASC'
]);

if ($services->have_posts()) :
?>
<section id="service_area" class="service-section">
    <div class="container">
        <div class="row">
            <?php while ($services->have_posts()) : $services->the_post(); ?>
                <div class="col-md-4">
                  <div class="service-card">
                        <?php $icon = get_post_meta(get_the_ID(), '_service_icon', true); ?>
                        <?php if ($icon) : ?>
                            <div class="service-icon">
                                <span class="dashicons <?php echo esc_attr($icon); ?>"></span>
                            </div>
                        <?php endif; ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="service-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <h3 class="service-title"><?php the_title(); ?></h3>
                        <div class="service-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="service-link">Read More</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>