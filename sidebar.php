<?php

    /**
     * Sidebar Template
     *
     * @package creativezone
     */

    if (! defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }
    // Check if the sidebar is active and display it
if (is_active_sidebar('home-sidebar')): ?>
    <aside class="sidebar">
        <?php dynamic_sidebar('home-sidebar'); ?>
    </aside>

<?php
 endif; ?>
