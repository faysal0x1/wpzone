<?php
/* * Template Name: Displaying Pa
 * Description: A custom template for the home page.
 * */

get_header();
?>


<!-- Body Area --->

<section id="body-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <?php get_template_part('template_part/post_setup') ?>

               <div class="comments-section">
                   <?php comments_template(); ?>
               </div>
            </div>
            <div class="col-md-3">
                <h1>This iS Sidebar</h1>
                <?php get_sidebar(); ?>
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