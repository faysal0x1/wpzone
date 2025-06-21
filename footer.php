<footer id="colophon" class="site-footer bg-dark text-white py-5" style="background-color:<?php echo get_theme_mod('footer_background_color', '#222222'); ?>; color:<?php echo get_theme_mod('footer_text_color', '#ffffff'); ?>;">
    <div class="container">
        <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')): ?>
            <div class="row g-4 mb-4">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="col-md-6 col-lg-3 footer-widget-area footer-widget-area-<?php echo $i; ?>">
                        <?php dynamic_sidebar('footer-' . $i); ?>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endif; ?>
        
        <div class="footer-bottom pt-4 border-top border-secondary">
            <div class="container">
                <div class="site-info text-center">
                    <?php echo wp_kses_post(get_theme_mod('footer_copyright_text', sprintf(__('Copyright &copy; %s. All Rights Reserved.', 'wpzone'), date('Y')))); ?>
                </div>
            </div>
        </div>
    </div>
</footer>