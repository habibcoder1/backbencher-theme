<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Archive Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} ?>

<?php get_header(); ?>

    <!-- =========================
        Body Section
    ========================== -->
    <section class="body-section archive-page pages">
        <div class="container">
            <!-- main conent -->
            <div class="body-main_content">
                <!-- blog hero section -->
                <div class="blog-hero mt-1">
                    <?php
                    // Archive Title and Description
                    the_archive_title('<h2 class="title text-uppercase">','</h2>');
                    the_archive_description('<div class="description text-capitalize">', '</div>');
		            ?>
                </div>
                <!-- blog details -->
                <div class="blog-details">
                    <!-- blog post -->
                    <div class="blog-row">
                        <!-- single blog -->
                        <?php get_template_part('template_parts/blog_page'); ?>
                    </div>
                    <!-- Pagination -->
                    <div class="post-pagination text-center">
                        <?php 
                        if (function_exists('the_posts_pagination')) {
                            the_posts_pagination(array(
                                'type'               => 'list',
                                'screen_reader_text' => ' ',
                                'prev_text'          => '<i class="fas fa-chevron-left"></i>',
                                'next_text'          => '<i class="fas fa-chevron-right"></i>',
                                'end_size'           => '4' 
                            ));
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- right sidebar -->
            <?php get_sidebar('right'); ?>
        </div>
    </section>


<?php get_footer(); ?>