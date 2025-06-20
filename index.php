<?php
    /*
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
                    <?php
                        $logo_url = get_theme_mod('wpzone_logo', get_template_directory_uri() . '/img/logo.png');
                        $logo_alt = '';

                        // Check if this is an uploaded image (has attachment ID)
                        $logo_id = attachment_url_to_postid($logo_url);

                        if ($logo_id) {
                            // Get alt text from uploaded image
                            $logo_alt = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
                        }

                        // Fallback if no alt text found
                        if (empty($logo_alt)) {
                            $logo_alt = get_bloginfo('name') . ' Logo';
                        }
                    ?>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($logo_alt); ?>"
                            class="img-fluid">
                    </a>
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

    <!-- Hero Section Start -->
    <section id="hero">
        <div class="container-fluid bg-light my-6 mt-0" id="home">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                        <h3 class="text-primary mb-3">I'm</h3>
                        <h1 class="display-3 mb-3">Kate Winslet</h1>
                        <h2 class="typed-text-output d-inline"></h2>
                        <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer,
                            Apps
                            Developer</div>
                        <div class="d-flex align-items-center pt-5">
                            <a href="" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                            <button type="button" class="btn-play" data-bs-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                            <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header End -->

    <!-- Body Area --->

    <section id="body-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        // Display the main content of the page
                        // while (have_posts()): the_post();
                        the_content();
                        // endwhile;

                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Body Area End --->


    <!-- Footer Start -->


    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-6 col-lg-3 about-footer">
                        <h3>Lorem Ipsum dummy text </h3>
                        <ul>
                            <li><a href="tel:(010) 1234 4321"><i class="fas fa-phone fa-flip-horizontal"></i>(010) 1234
                                    4321</a></li>
                            <li><i class="fas fa-map-marker-alt"></i>
                                1 / 105 Bay Lights,
                                <br />Lorem Ipsum,
                                <br />LIC 3201
                            </li>
                        </ul>
                        <a href="" class="btn red-btn">Book Now</a>
                    </div>
                    <div class="col-md-6 col-lg-2 page-more-info">
                        <div class="footer-title">
                            <h4>Page links</h4>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Testimonial</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3 page-more-info">
                        <div class="footer-title">
                            <h4>More Info</h4>
                        </div>
                        <ul>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Dolor sit amet</a></li>
                            <li><a href="#">Consectetur Adipisicing </a></li>
                            <li><a href="#">Ed do eiusmod tempor incididunt</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 open-hours">
                        <div class="footer-title">
                            <h4>Open hours</h4>
                            <ul class="footer-social">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                            </ul>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><i class="far fa-clock"></i>Monday Thursday</td>
                                    <td>9:00am - 5:00pm</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-clock"></i>Friday</td>
                                    <td>9:00am - 4:00pm</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-clock"></i>Sturday</td>
                                    <td>9:00am - 1:30pm</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-clock"></i>Sunday</td>
                                    <td>9:30am - 12:00pm</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="footer-logo">

                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <!-- <img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"> -->
                                            <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                                                <img src="<?php echo esc_url($logo_url); ?>"
                                                    alt="<?php echo esc_attr($logo_alt); ?>" class="img-fluid">
                                            </a>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="">Privacy policy</a>
                    </div>
                    <div class="col-sm-8">
                        <p>
                            <?php echo get_theme_mod('wpzone_copyright_section') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer End -->


    <?php wp_footer(); ?>
</body>

</html>