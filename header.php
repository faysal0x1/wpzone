<?php
    /**
     * This template for displaying the header
     *
     * @package creativezone
     */
    if (! defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Skip Links for Accessibility -->
    <a class="skip-link screen-reader-text" href="#main-content"><?php _e('Skip to content', 'creativezone'); ?></a>
    <a class="skip-link screen-reader-text"
        href="#main-navigation"><?php _e('Skip to navigation', 'creativezone'); ?></a>

    <!-- Header Start -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNavbar" role="navigation"
            aria-label="<?php _e('Main navigation', 'creativezone'); ?>">
            <div class="container">
                <!-- Logo -->
                <div class="navbar-brand-wrapper">
                    <?php echo creativezone_get_logo(); ?>
                </div>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false"
                    aria-label="<?php _e('Toggle navigation', 'creativezone'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="mainMenu">
                    <?php
                        $menu_position = get_theme_mod('creativezone_menu_position', 'left_menu');

                        $menu_class = 'navbar-nav ms-auto mb-2 mb-lg-0';
                        if ($menu_position === 'left_menu') {
                            $menu_class = 'navbar-nav me-auto mb-2 mb-lg-0';
                        } elseif ($menu_position === 'center_menu') {
                            $menu_class = 'navbar-nav mx-auto mb-2 mb-lg-0';
                        }

                        wp_nav_menu([
                            'theme_location' => 'main_menu',
                            'container'      => false,
                            'menu_class'     => $menu_class,
                            'fallback_cb'    => '__return_false',
                            'items_wrap'     => '<ul id="main-navigation" class="%2$s">%3$s</ul>',
                            'depth'          => 2,
                            'walker'         => new Bootstrap5_Nav_Walker(),
                        ]);
                    ?>

                    <!-- Search Button (Optional) -->
                    <div class="navbar-nav ms-auto">
                        <button class="btn btn-outline-primary btn-sm ms-2" type="button" data-bs-toggle="modal"
                            data-bs-target="#searchModal" aria-label="<?php _e('Open search', 'creativezone'); ?>">
                            <i class="bi bi-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="searchModalLabel"><?php _e('Search', 'creativezone'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="<?php _e('Close', 'creativezone'); ?>"></button>
                </div>
                <div class="modal-body">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg"
                                placeholder="<?php _e('Search...', 'creativezone'); ?>"
                                value="<?php echo get_search_query(); ?>" name="s" required
                                aria-label="<?php _e('Search for', 'creativezone'); ?>">
                            <button class="btn btn-primary" type="submit"
                                aria-label="<?php _e('Submit search', 'creativezone'); ?>">
                                <i class="bi bi-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content Wrapper -->
    <main class="site-main" id="main-content">