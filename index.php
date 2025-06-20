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

<body      <?php body_class(); ?>>

    <div class="container-fluid bg-white p-0" style="margin-top: 41px;">
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
                    <img class="img-fluid" src="<?php echo esc_url($logo_url); ?>"
                        alt="<?php echo esc_attr($logo_alt); ?>" style="max-height: 50px;">
                </div>

                <!-- Hamburger menu button - shown only on mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
                    aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu Container -->
                <div class="collapse navbar-collapse" id="mainMenu">
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'main_menu',
                            'container'      => false,
                            'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
                            'fallback_cb'    => '__return_false',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'          => 2,
                            'walker'         => new Bootstrap5_Nav_Walker(),
                        ]);
                    ?>
                </div>
            </div>
        </nav>
    </div>

    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    <h1 class="display-3 mb-3">Kate Winslet</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps
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
    <!-- Header End -->


    <?php wp_footer(); ?>
</body>

</html>