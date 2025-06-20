<?php
    /**
     * Theme helper functions
     *
     * @package wpzone
     */

    if (! function_exists('wpzone_get_logo')) {
        /**
         * Get the theme logo with proper attributes
         *
         * @return string HTML markup for the logo
         */
        function wpzone_get_logo()
        {
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

            ob_start();
        ?>
<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
    <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($logo_alt); ?>" class="img-fluid">
</a>
<?php
    return ob_get_clean();
    }
}