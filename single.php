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

    <?php get_template_part('template_parts/single_page'); ?>

<?php get_footer(); ?>