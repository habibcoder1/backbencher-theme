<?php  
/**
 * @package Backbencher Studio
 * 
 * Backbencher Studio theme supports
 * Version: 1.0.0
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 


/* =======================
    Theme Support
======================= */
add_action( 'after_setup_theme', 'bbs_theme_supports');
function bbs_theme_supports(){
    add_theme_support('title-tag');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('widgets');
	add_theme_support('custom-logo', ['width' => 150, 'height' => 80]);
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', ['audio', 'video', 'gallery', 'aside', 'quote', 'image', 'chat', 'link', 'status']);
	// text domain
	load_theme_textdomain('backbencher', get_template_directory().'/languages');
	// register menus
	register_nav_menu('bbsprimanymenu', __('Primay Menu', 'backbencher'));
	register_nav_menu('bbssecondarymenu', __('Footer Menu', 'backbencher'));
};