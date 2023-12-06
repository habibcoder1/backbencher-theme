<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Single Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 

get_header(); ?>

<!-- =========================
        Body Section
========================== -->
<section class="body-section single-page pt-2">
    <div class="container">
        <!-- main conent -->
        <div class="body-main_content">
            <!-- single post -->
            <?php get_template_part('template_parts/single_page'); ?>	

            <!-- Comments Box -->
            <div class="comments-area">
                <?php if(comments_open() || get_comments_number() ) :
                    comments_template();
                endif; ?>
            </div>	

            <!-- Previou and Next Text -->
            <div class="previous_next-post text-center mt-5">
                <div class="previous-post">
                    <?php previous_post_link('%link', '< Previous Post'); ?>
                </div>
                <div class="next-post">
                    <?php next_post_link('%link', 'Next Post >'); ?>
                </div>
                <?php 
                wp_link_pages(
                    array(
                        'before'      => '<div class="page-links">' . __( 'Pages:', 'atsbd' ),
                        'after'       => '</div>',
                    )
                ); ?>
            </div>

        </div>
        <!-- right sidebar -->
        <?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer(); ?>