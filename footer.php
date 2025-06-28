    </main><!-- .site-main -->

    <!-- Footer Start -->
    <footer class="site-footer"
        style="background-color: <?php echo esc_attr(get_theme_mod('footer_background_color', '#12141D')); ?>; color: <?php echo esc_attr(get_theme_mod('footer_text_color', '#ffffff')); ?>;">
        <!-- Main Footer -->
        <div class="footer-main py-5">
            <div class="container">
                <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')): ?>
                <!-- Widget Areas -->
                <div class="row g-4 mb-5">
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                    <?php if (is_active_sidebar('footer-' . $i)): ?>
                    <div class="col-lg-3 col-md-6 footer-widget-area footer-widget-area-<?php echo $i; ?>">
                        <div class="footer-widget">
                            <?php dynamic_sidebar('footer-' . $i); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <?php else: ?>
                <!-- Default Footer Content (when no widgets are active) -->
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
                                <h6 class="text-white mb-3"><?php _e('Follow Us', 'creativezone'); ?></h6>
                                <div class="d-flex gap-3">
                                    <a href="<?php echo esc_url(get_theme_mod('social_facebook', '#')); ?>"
                                        class="social-link" target="_blank" rel="noopener"
                                        aria-label="<?php _e('Facebook', 'creativezone'); ?>">
                                        <i class="bi bi-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?php echo esc_url(get_theme_mod('social_twitter', '#')); ?>"
                                        class="social-link" target="_blank" rel="noopener"
                                        aria-label="<?php _e('Twitter', 'creativezone'); ?>">
                                        <i class="bi bi-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?php echo esc_url(get_theme_mod('social_instagram', '#')); ?>"
                                        class="social-link" target="_blank" rel="noopener"
                                        aria-label="<?php _e('Instagram', 'creativezone'); ?>">
                                        <i class="bi bi-instagram" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?php echo esc_url(get_theme_mod('social_linkedin', '#')); ?>"
                                        class="social-link" target="_blank" rel="noopener"
                                        aria-label="<?php _e('LinkedIn', 'creativezone'); ?>">
                                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?php echo esc_url(get_theme_mod('social_youtube', '#')); ?>"
                                        class="social-link" target="_blank" rel="noopener"
                                        aria-label="<?php _e('YouTube', 'creativezone'); ?>">
                                        <i class="bi bi-youtube" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4"><?php _e('Quick Links', 'creativezone'); ?></h5>
                            <?php
                                    wp_nav_menu([
                                        'theme_location' => 'footer_menu',
                                        'container'      => false,
                                        'menu_class'     => 'footer-links list-unstyled',
                                        'fallback_cb'    => function() {
                                            echo '<ul class="footer-links list-unstyled">';
                                            echo '<li><a href="' . esc_url(home_url('/')) . '">' . __('Home', 'creativezone') . '</a></li>';
                                            echo '<li><a href="' . esc_url(home_url('/about/')) . '">' . __('About', 'creativezone') . '</a></li>';
                                            echo '<li><a href="' . esc_url(home_url('/services/')) . '">' . __('Services', 'creativezone') . '</a></li>';
                                            echo '<li><a href="' . esc_url(home_url('/contact/')) . '">' . __('Contact', 'creativezone') . '</a></li>';
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
                            <h5 class="text-white mb-4"><?php _e('Our Services', 'creativezone'); ?></h5>
                            <ul class="footer-links list-unstyled">
                                <li><a href="#"><?php _e('Web Design', 'creativezone'); ?></a></li>
                                <li><a href="#"><?php _e('Web Development', 'creativezone'); ?></a></li>
                                <li><a href="#"><?php _e('Mobile Apps', 'creativezone'); ?></a></li>
                                <li><a href="#"><?php _e('UI/UX Design', 'creativezone'); ?></a></li>
                                <li><a href="#"><?php _e('Digital Marketing', 'creativezone'); ?></a></li>
                                <li><a href="#"><?php _e('SEO Optimization', 'creativezone'); ?></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4"><?php _e('Contact Info', 'creativezone'); ?></h5>
                            <div class="contact-info">
                                <div class="contact-item d-flex align-items-start mb-3">
                                    <i class="bi bi-geo-alt-fill text-primary me-3 mt-1" aria-hidden="true"></i>
                                    <div>
                                        <p class="mb-0 text-muted">
                                            <?php echo get_theme_mod('contact_address', '123 Business Street, New York, NY 10001'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-item d-flex align-items-start mb-3">
                                    <i class="bi bi-telephone-fill text-primary me-3 mt-1" aria-hidden="true"></i>
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
                                    <i class="bi bi-envelope-fill text-primary me-3 mt-1" aria-hidden="true"></i>
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
                <?php endif; ?>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom py-4 border-top border-secondary"
            style="background-color: <?php echo esc_attr(get_theme_mod('footer_bottom_background_color', 'rgba(0, 0, 0, 0.2)')); ?>;">
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
                            <?php if (get_privacy_policy_url()) : ?>
                            <a href="<?php echo esc_url(get_privacy_policy_url()); ?>"
                                class="text-muted text-decoration-none me-3"><?php _e('Privacy Policy', 'creativezone'); ?></a>
                            <?php endif; ?>
                            <a href="<?php echo esc_url(home_url('/terms/')) ?>"
                                class="text-muted text-decoration-none me-3"><?php _e('Terms of Service', 'creativezone'); ?></a>
                            <a href="<?php echo esc_url(home_url('/sitemap/')) ?>"
                                class="text-muted text-decoration-none"><?php _e('Sitemap', 'creativezone'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="<?php _e('Back to top', 'creativezone'); ?>">
        <i class="bi bi-arrow-up" aria-hidden="true"></i>
    </button>

    <?php wp_footer(); ?>
    </body>

    </html>