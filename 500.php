<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying 500 page
 */

// ABSPATH Defined
 if (!defined('ABSPATH')) {
	exit('not valid');
}

get_header(); ?>

    <!-- =========================
        404 page
    ========================== -->
    <section class="empty-page server-error">
        <div class="container">
            <p class="text-center mb-1"><?php _e('Server Error Page', 'backbencher'); ?></p>
            <h3 class="text-center my-2"><?php _e('500 Page', 'backbencher'); ?></h3>
            <p class="text-center mb-1"><?php _e('Note: Please contact to your server provider', 'backbencher'); ?></p>
        </div>
    </section>

<?php
get_footer();