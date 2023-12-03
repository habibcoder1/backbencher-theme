<?php 
/**
 * @package AllThe Shop BD
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
    <section class="body-section archive-page pages pt-2">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-3">
            <!-- main conent -->
            <div class="body-main_content col-span-3 lg:col-span-4">
                <!-- blog hero section -->
                <div class="blog-hero mt-1">
                    <?php
                    // Archive Title and Description
                    the_archive_title('<h2 class="title uppercase bg-[#EEEEEE] pl-2 text-[26px]">','</h2>');
                    the_archive_description('<div class="description capitalize pb-1 pl-3 bg-[#EEEEEE]">', '</div>');
		            ?>
                </div>
                <!-- blog details -->
                <div class="blog-details border-l-8 border-[#EEEEEE] p-4">
                    <!-- blog post -->
                    <div class="blog-row grid sm:grid-cols-3 sm:gap-4">
                        <!-- single blog -->
                        <?php get_template_part('template_parts/blog_page'); ?>
                    </div>
                    <!-- Pagination -->
                    <div class="post-pagination text-center mt-3">
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