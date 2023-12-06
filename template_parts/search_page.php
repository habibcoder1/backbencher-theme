<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
};


if(have_posts()) : ?>
    <!-- Search Title -->
    <div class="blog-her">
        <h2 class="text-uppercase search-title">
            <?php printf( __( 'Search Results for: %s', 'backbencher'), '<span>' . get_search_query() . '</span>' ); ?>
        </h2>
    </div>

    <!-- blog details -->
    <div class="blog-details">
        <!-- blog post -->
        


        <!-- Pagination -->
        <div class="post-pagination text-center">
            <?php 
            if (function_exists('the_posts_pagination')) {
                the_posts_pagination(array(
                    'type'               => 'list',
                    'screen_reader_text' => ' ',
                    'prev_text'          => '<i class="fas fa-chevron-left"></i>',
                    'next_text'          => '<i class="fas fa-chevron-right"></i>',
                    'end_size'           => 4 
                ));
            }; ?>
        </div>
    </div>

<?php
else: ?>
    <!-- No Search Result -->
    <div class="search-result">
        <h2 class="text-uppercase search-title"><?php printf( __( 'Sorry, No Result Found For: %s', 'atsbd'), '<span>' . get_search_query() . '</span>' ); ?></h2>
    </div>
<?php
endif; ?>