<?php
    /**
     * Helper functions for the theme
     *
     * @package creativezone
     */

    if (! function_exists('creativezone_get_logo')) {
        /**
         * Get the logo URL
         */
        function creativezone_get_logo()
        {
            $logo_url = get_theme_mod('creativezone_logo', get_template_directory_uri() . '/img/logo.png');
            return $logo_url;
        }
    }