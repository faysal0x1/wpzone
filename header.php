<?php
    /**
     * This template for displaying the header
     *
     * @package wpzone
     */
    if (! defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }
?>

<!DOCTYPE html>
<html lang="<?php language_attributes()?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Header Start -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNavbar">
            <div class="container">
                <!-- Logo -->
                <div class="navbar-brand-wrapper">
                    <?php echo wpzone_get_logo(); ?>
                </div>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="mainMenu">
                    <?php
                        $menu_position = get_theme_mod('wpzone_menu_position', 'left_menu');

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
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'          => 2,
                            'walker'         => new Bootstrap5_Nav_Walker(),
                        ]);
                    ?>

                    <!-- Search Button (Optional) -->
                    <div class="navbar-nav ms-auto">
                        <button class="btn btn-outline-primary btn-sm ms-2" type="button" data-bs-toggle="modal"
                            data-bs-target="#searchModal">
                            <i class="bi bi-search"></i>
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
                    <h5 class="modal-title" id="searchModalLabel">Search</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Search..."
                                value="<?php echo get_search_query(); ?>" name="s" required>
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content Wrapper -->
    <main class="site-main">