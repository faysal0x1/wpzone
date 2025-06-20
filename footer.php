<footer id="colophon" class="site-footer" style="background-color:<?php echo get_theme_mod('footer_background_color', '#222222'); ?>; color:<?php echo get_theme_mod('footer_text_color', '#ffffff'); ?>;">
    <div class="footer-widgets">
        <div class="container">
            <div class="footer-widgets-grid">
<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')): ?>
    <div class="footer-widgets">
        <div class="container">
            <div class="footer-widgets-grid">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="footer-widget-area footer-widget-area-<?php echo $i; ?>">
                        <?php dynamic_sidebar('footer-' . $i); ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="site-info">
                <?php echo wp_kses_post(get_theme_mod('footer_copyright_text', sprintf(__('Copyright &copy; %s. All Rights Reserved.', 'wpzone'), date('Y')))); ?>
            </div>
        </div>
    </div>
</footer>