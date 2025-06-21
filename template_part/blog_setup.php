                <?php
                    // Start the loop to display posts
                if (have_posts()): ?>
                    <div class="posts-container">
                        <?php while (have_posts()): the_post(); ?>
		                            <div class="card mb-4 shadow-sm">
		                                <?php if (has_post_thumbnail()): ?>
		                                    <div class="post-thumbnail">
		                                        <a href="<?php the_permalink(); ?>">
		                                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
		                                        </a>
		                                    </div>
		                                <?php endif; ?>

                                <div class="card-body">
                                    <h2 class="card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>

                                    <div class="card-text">
                                        <?php the_excerpt(); ?>
                                    </div>

                                </div>

                                <div class="card-footer text-muted">
                                    <small>
                                        <?php the_time(get_option('date_format')); ?> |
                                        <?php the_category(', '); ?>
                                    </small>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination-wrapper">
                        <?php
                            if (function_exists('wpzone_pagenav')) {
                                wpzone_pagenav();
                            }
                    ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info">
                        <?php _e('No posts found.', 'wpzone'); ?>
                    </div>
                <?php endif; ?>