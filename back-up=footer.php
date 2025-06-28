</main><!-- .site-main -->

<!-- Footer Start -->
<footer class="site-footer bg-dark text-white">
    <!-- Main Footer -->
    <div class="footer-main py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-4">
                            <?php echo creativezone_get_logo(); ?>
                        </div>
                        <p class="text-muted mb-4">
                            <?php echo get_theme_mod('footer_description', 'We are a creative team passionate about delivering exceptional digital experiences and innovative solutions for our clients.'); ?>
                        </p>
                        <div class="social-links">
                            <h6 class="text-white mb-3">Follow Us</h6>
                            <div class="d-flex gap-3">
                                <a href="<?php echo esc_url(get_theme_mod('social_facebook', '#')); ?>"
                                    class="social-link" target="_blank" rel="noopener">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="<?php echo esc_url(get_theme_mod('social_twitter', '#')); ?>"
                                    class="social-link" target="_blank" rel="noopener">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="<?php echo esc_url(get_theme_mod('social_instagram', '#')); ?>"
                                    class="social-link" target="_blank" rel="noopener">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="<?php echo esc_url(get_theme_mod('social_linkedin', '#')); ?>"
                                    class="social-link" target="_blank" rel="noopener">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="<?php echo esc_url(get_theme_mod('social_youtube', '#')); ?>"
                                    class="social-link" target="_blank" rel="noopener">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'footer_menu',
                                'container'      => false,
                                'menu_class'     => 'footer-links list-unstyled',
                                'fallback_cb'    => function() {
                                    echo '<ul class="footer-links list-unstyled">';
                                    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
                                    echo '<li><a href="' . esc_url(home_url('/about/')) . '">About</a></li>';
                                    echo '<li><a href="' . esc_url(home_url('/services/')) . '">Services</a></li>';
                                    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
                                    echo '</ul>';
                                },
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'          => 1,
                            ]);
                        ?>
                    </div>
                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="text-white mb-4">Our Services</h5>
                        <ul class="footer-links list-unstyled">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Mobile Apps</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">SEO Optimization</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="text-white mb-4">Contact Info</h5>
                        <div class="contact-info">
                            <div class="contact-item d-flex align-items-start mb-3">
                                <i class="bi bi-geo-alt-fill text-primary me-3 mt-1"></i>
                                <div>
                                    <p class="mb-0 text-muted">
                                        <?php echo get_theme_mod('contact_address', '123 Business Street, New York, NY 10001'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item d-flex align-items-start mb-3">
                                <i class="bi bi-telephone-fill text-primary me-3 mt-1"></i>
                                <div>
                                    <p class="mb-0 text-muted">
                                        <a href="tel:<?php echo esc_attr(get_theme_mod('contact_phone', '+1 (555) 123-4567')); ?>"
                                            class="text-muted text-decoration-none">
                                            <?php echo get_theme_mod('contact_phone', '+1 (555) 123-4567'); ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item d-flex align-items-start mb-3">
                                <i class="bi bi-envelope-fill text-primary me-3 mt-1"></i>
                                <div>
                                    <p class="mb-0 text-muted">
                                        <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'info@example.com')); ?>"
                                            class="text-muted text-decoration-none">
                                            <?php echo get_theme_mod('contact_email', 'info@example.com'); ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom py-4 border-top border-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright text-center text-md-start">
                        <p class="mb-0 text-muted">
                            <?php echo wp_kses_post(get_theme_mod('footer_copyright_text', sprintf(__('© %s %s. All Rights Reserved.', 'creativezone'), date('Y'), get_bloginfo('name')))); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-links text-center text-md-end">
                        <a href="<?php echo esc_url(get_privacy_policy_url()); ?>"
                            class="text-muted text-decoration-none me-3">Privacy Policy</a>
                        <a href="<?php echo esc_url(home_url('/terms/')) ?>"
                            class="text-muted text-decoration-none me-3">Terms of Service</a>
                        <a href="<?php echo esc_url(home_url('/sitemap/')) ?>"
                            class="text-muted text-decoration-none">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="bi bi-arrow-up"></i>
</button>

<?php wp_footer(); ?>
</body>

</html>