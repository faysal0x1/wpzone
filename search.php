<?php
/* * Template Name: Search Page
 * Description: A custom template for the search page.
 * */

get_header();
?>


<!-- Body Area --->

<section id="body-area">
    <div class="container">
        <div class="row">
            <div class="md-12">
                <div class="search-title">
                    <h1><?php printf(__('Search Results for: %s', 'wpzone'), get_search_query()); ?></h1>
         
                </div>
            </div>
            <div class="col-md-8">

<?php get_template_part('template_part/blog_setup') ?>
            </div>
            <div class="col-md-3">
                <h1>This iS Sidebar</h1>
                <?php  get_sidebar();?>
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