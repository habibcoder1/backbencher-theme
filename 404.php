<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * template for displaying 404 page
 */

// ABSPATH Defined
 if (!defined('ABSPATH')) {
	exit('not valid');
}

get_header(); ?>

    <!-- =========================
        404 page
    ========================== -->
    <section class="empty-page">
        <div class="container">
            <p class="text-center mb-1"><?php _e('You are staying in an Empty Page', 'backbencher'); ?></p>
            <h3 class="text-center"><?php _e('404 Page', 'backbencher'); ?></h3>
            <p class="text-center"><?php _e('Please Return', 'backbencher') ?> <a href="<?php echo esc_url(home_url()); ?>"><?php _e('Home Page', 'backbencher'); ?></a></p>
        </div>
    </section>

<?php
get_footer();