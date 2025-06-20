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

    <!-- Header Start --->
    <header class="container-fluid bg-white p-0" style="margin-top: 41px;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5">
            <div class="container">
                <!-- Logo - shown on both mobile and desktop -->
                <div class="logo">
                    <?php echo wpzone_get_logo(); ?>
                </div>

                <!-- Hamburger menu button - shown only on mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
                    aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu Container -->
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
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->