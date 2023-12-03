<?php  
/**
 * @package AllThe Shop BD
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
        <div class="container mx-auto pt-8 pb-6">
            <p class="text-center mb-1"><?php _e('You are staying in an Empty Page', 'insurance-seba'); ?></p>
            <h3 class="text-center"><?php _e('404 Page', 'insurance-seba'); ?></h3>
            <p class="text-center"><?php _e('Please Return', 'insurance-seba') ?> <a class="text-[#dd3627] transition-colors hover:text-gray-600 hover:underline" href="<?php echo esc_url(home_url()); ?>"><?php _e('Home Page', 'insurance-seba'); ?></a></p>
        </div>
    </section>

<?php
get_footer();