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

    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary fw-bold m-0">ProMan</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#skill" class="nav-item nav-link">Skills</a>
                <a href="#service" class="nav-item nav-link">Services</a>
            </div>
            <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-primary fw-bold m-0">ProMan</h1>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#project" class="nav-item nav-link">Projects</a>
                <a href="#team" class="nav-item nav-link">Team</a>
                <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>

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