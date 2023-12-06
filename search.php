<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Search Page
 * */

if (!defined('ABSPATH')){
	exit('not valid');
};


get_header(); ?>

    <!-- =========================
        Body Section
    ========================== -->
    <section class="search-page body-section blog-page">
        <div class="container">
            <!-- main conent -->
            <div class="body-main_content">
                <!-- Serch -->
                <?php get_template_part('template_parts/search_page'); ?>
            </div>
            <!-- right sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </section>
    
<?php get_footer(); ?>