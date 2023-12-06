<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Backbencher Studio all theme functions and defination
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 

/* =======================
    Require Files
======================= */
// theme support
$theme_support = dirname(__FILE__).'/inc/functions/theme_support.php';
if(file_exists($theme_support)){
    require_once($theme_support);
}

// theme enqueue
$theme_enqueue = dirname(__FILE__).'/inc/functions/theme_enqueue.php';
if(file_exists($theme_enqueue)){
    require_once($theme_enqueue);
}

// Custom Post
$custom_post = dirname(__FILE__).'/inc/functions/custom_post_register.php';
if(file_exists($custom_post)){
    require_once($custom_post);
}

// Other Functions
$other_function = dirname(__FILE__).'/inc/functions/other_functions.php';
if(file_exists($other_function)){
    require_once($other_function);
}

// Theme Customizer
$theme_customizer = dirname(__FILE__).'/inc/theme-customizer/theme_customizer.php';
if(file_exists($theme_customizer)){
    require_once($theme_customizer);
}

// Elementor Widgets
$elementor_widgets_dev = dirname(__FILE__).'/inc/elementor/bbs_elementor_widgets.php';
if(file_exists($elementor_widgets_dev)){
    require_once($elementor_widgets_dev);
}
