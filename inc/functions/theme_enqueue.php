<?php  
/**
 * @package Backbencher Studio
 * 
 * Backbencher Studio theme enqueue files
 * Version: 1.0.0
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 

/* ===================---====
    Enqueue All Stylesheet
==================---===== */
add_action('wp_enqueue_scripts', 'bbs_stylesheet_enqueue');
function bbs_stylesheet_enqueue(){
    // google font
    wp_enqueue_style('bbs-google-font', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800&display=swap');
    // stylesheet
    wp_enqueue_style('bbs-all', get_template_directory_uri().'/assets/css/all.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bbs-fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bbs-bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bbs-slick', get_template_directory_uri().'/assets/css/slick.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bbs-swiper', get_template_directory_uri().'/assets/css/swiper.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bbs-custom', get_template_directory_uri().'/assets/css/custom.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bbs-stylesheet', get_stylesheet_uri(), array(), '1.0.0', 'all');
}


/* =======================
    Enqueue All Scripts
======================= */
add_action('wp_enqueue_scripts', 'bbs_all_scripts_enqueue');
function bbs_all_scripts_enqueue(){
    // jquery ui tabs
    wp_enqueue_script('jquery-ui-tabs');
    // scripts
    wp_enqueue_script('bbs-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('bbs-slick', get_template_directory_uri().'/assets/js/slick.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('bbs-swiper', get_template_directory_uri().'/assets/js/swiper.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('bbs-mixitup', get_template_directory_uri().'/assets/js/mixitup.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('bbs-custom', get_template_directory_uri().'/assets/js/custom.js', ['jquery'], '1.0.0', true);
    // comments form
    wp_enqueue_script('comment-reply');
    // for ajax  (here custom js id and wp_localize id need to be same)
    wp_localize_script('bbs-ajax', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
};

// conditional scritps
add_action('wp_enqueue_scripts', 'bbs_conditional_scripts');
function bbs_conditional_scripts(){
    wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_script_add_data('html5shim', 'conditional', 'if It ie 9');
}