<?php
    /* * Template Name: Home Page
 * Description: A custom template for the home page.
 * */

    get_header();
?>


<!-- Body Area --->

<section id="body-area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php

                    // Start the loop to display posts
                    if (have_posts()):
                        while (have_posts()): the_post();
                        ?>

                <div class="card mb-3">
                    <div class="card-body">

                        <h1 class="card-header">
                            <?php
                                                                      if (has_post_thumbnail()) {
                                                                          the_post_thumbnail('thumbnail', ['class' => 'card-img-top']);

                                                                      }

                                                                  ?>
                        </h1>
                        <h5 class="card-title">

                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                        <p class="card-text">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>

                <?php
                                        endwhile;
                                    else:
                                        _e('No posts found.', 'wpzone');
                                    endif;

                                ?>
            </div>
            <div class="col-md-3">
                <?php
                    // Display the sidebar content
                    if (is_active_sidebar('home-sidebar')) {
                        dynamic_sidebar('home-sidebar');
                    } else {
                        echo '<h2>This is the sidebar.</h2>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Body Area End --->


<!-- Footer Start -->

<?php get_footer(); ?>
<!-- Footer End -->


<?php wp_footer(); ?>
</body>

</html>