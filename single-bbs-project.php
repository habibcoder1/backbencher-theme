<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Project Single Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 


get_header(); ?>

    <?php echo get_template_part('template_parts/single_project'); ?>
    
<?php get_footer(); ?>