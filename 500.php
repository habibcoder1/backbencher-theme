<?php  
/**
 * @package AllThe Shop BD
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
        <div class="container mx-auto pt-8 pb-6">
            <p class="text-center mb-1"><?php _e('Server Error Page', 'insurance-seba'); ?></p>
            <h3 class="text-center my-2"><?php _e('500 Page', 'insurance-seba'); ?></h3>
        </div>
    </section>

<?php
get_footer();