<?php
    /**
     * The template for displaying 404 pages (not found)
     *
     * @package wpzone
     */

    get_header();
?>

<!-- 404 Error Page Start -->
<section class="error-404-page min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <!-- 404 Number -->
                <div class="error-number mb-4">
                    <h1 class="display-1 fw-bold text-primary mb-0">404</h1>
                    <div class="error-line"></div>
                </div>

                <!-- Error Message -->
                <div class="error-content mb-5">
                    <h2 class="h3 mb-3">Oops! Page Not Found</h2>
                    <p class="lead text-muted mb-4">
                        The page you are looking for might have been removed, had its name changed, or is temporarily
                        unavailable.
                    </p>

                    <!-- Typed Animation -->
                    <div class="typed-section mb-4">
                        <h3 class="h5 text-muted mb-2">You might be looking for:</h3>
                        <h4 class="typed-text-output text-primary"></h4>
                        <div class="typed-text d-none">Web Design, Web Development, Mobile Apps, UI/UX Design, Digital
                            Marketing, SEO Services</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="error-actions mb-5">
                    <div class="row justify-content-center g-3">
                        <div class="col-auto">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg px-4">
                                <i class="bi bi-house-door me-2"></i>
                                Back to Home
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                                class="btn btn-outline-primary btn-lg px-4">
                                <i class="bi bi-envelope me-2"></i>
                                Contact Us
                            </a>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-outline-secondary btn-lg px-4" onclick="history.back()">
                                <i class="bi bi-arrow-left me-2"></i>
                                Go Back
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Search Section -->
                <div class="search-section mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="search-box">
                                <h5 class="mb-3">Search for something else?</h5>
                                <form role="search" method="get" class="search-form"
                                    action="<?php echo esc_url(home_url('/')); ?>">
                                    <div class="input-group input-group-lg">
                                        <input type="search" class="form-control" placeholder="Search our website..."
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

                <!-- Popular Pages -->
                <div class="popular-pages">
                    <h5 class="mb-4">Popular Pages</h5>
                    <div class="row justify-content-center g-3">
                        <div class="col-auto">
                            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn-light">
                                <i class="bi bi-person me-2"></i>
                                About Us
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-light">
                                <i class="bi bi-gear me-2"></i>
                                Our Services
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="btn btn-light">
                                <i class="bi bi-images me-2"></i>
                                Portfolio
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn btn-light">
                                <i class="bi bi-journal-text me-2"></i>
                                Blog
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="error-decoration">
        <div class="decoration-circle decoration-circle-1"></div>
        <div class="decoration-circle decoration-circle-2"></div>
        <div class="decoration-circle decoration-circle-3"></div>
    </div>
</section>
<!-- 404 Error Page End -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Typed.js for 404 page
    if (document.querySelector('.typed-text-output')) {
        var typed_strings = document.querySelector('.typed-text').textContent;
        if (typeof Typed !== 'undefined') {
            new Typed('.typed-text-output', {
                strings: typed_strings.split(', '),
                typeSpeed: 100,
                backSpeed: 50,
                backDelay: 2000,
                loop: true,
                showCursor: true,
                cursorChar: '|'
            });
        }
    }
});
</script>

<?php get_footer(); ?>