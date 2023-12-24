<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Theme Custom Post Type
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 



/* ========================
    Custom Post Type
======================== */
add_action('init', 'bbs_custom_post_type');
function bbs_custom_post_type(){
    // regsiter post type for projects //
    if (!post_type_exists('bbs-project')) {
        register_post_type('bbs-project', array(
            'public'        => true,
            'labels'        => array(
                'name'                  => __('BBS Projects', 'backbencher'),
                'add_new'               => __('Add Project', 'backbencher'),
                'add_new_item'          => __('Add New Project', 'backbencher'),
                'edit_item'             => __('Edit Project', 'backbencher'),
                'view_item'             => __('View Project', 'backbencher'),
                'new_item'              => __('New Project', 'backbencher'),
                'featured_image'        => __('Project Image', 'backbencher'),
                'set_featured_image'    => __('Set Project Image', 'backbencher'),
                'remove_featured_image' => __('Remove Project Image', 'backbencher'),
            ),
            'menu_icon'     => 'dashicons-portfolio',
            'menu_position' => 20,
            'show_ui'       => true,
            'rewrite'       => array('slug' => 'bbs-project'),
            'has_archive'   => true,
            'query_var'     => true,
            'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'page-attributes'],
            'publicly_queryable' => true,
        ));
    }
    // register category for project
    if (!taxonomy_exists('bbsproject_tax')) {
        register_taxonomy('bbsproject_tax', 'bbs-project', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Categories', 'backbencher'),
                'add_new'             => __('Add Category','backbencher'),
                'add_new_item'        => __('Add New Category', 'backbencher'),
                'all_items'           => __('All Category', 'backbencher'),
                'edit_item'           => __('Edit Category', 'backbencher'),
                'update_item'         => __('Update Category', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Category', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'project-category'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    // Register Taxonomy for Tag & for project
    if (!taxonomy_exists('bbsproject_tags')) {
        register_taxonomy('bbsproject_tags', 'bbs-project', array(
            'labels'            => array(
                'name'                => __('Tags', 'backbencher'),
                'add_new'             => __('Add Tag', 'backbencher'),
                'add_new_item'        => __('Add New Tag', 'backbencher'),
                'all_items'           => __('All Tags', 'backbencher'),
                'edit_item'           => __('Edit Tags', 'backbencher'),
                'view_item'           => __('View Tag', 'backbencher'),
                'search_items'        => __('Search Tag', 'backbencher'),
                'update_item'         => __('Update Tags', 'backbencher'),
                'not_found'           => __('No Tag Found', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Tag', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'project-tag'),
            'query_var'         => true,
            'show_admin_column' => true,
        ));
    }
    

    // register post type for career //
    if (!post_type_exists('bbs-career')) {
        register_post_type('bbs-career', array(
            'public'        => true,
            'labels'        => array(
                'name'                  => __('BBS Job Board', 'backbencher'),
                'add_new'               => __('Add New Job', 'backbencher'),
                'add_new_item'          => __('Add New Job', 'backbencher'),
                'edit_item'             => __('Edit Job', 'backbencher'),
                'view_item'             => __('View Job', 'backbencher'),
                'new_item'              => __('New Job', 'backbencher'),
                'featured_image'        => __('Job Image', 'backbencher'),
                'set_featured_image'    => __('Set Job Image', 'backbencher'),
                'remove_featured_image' => __('Remove Job Image', 'backbencher'),
            ),
            'menu_icon'     => 'dashicons-megaphone',
            'menu_position' => 24,
            'show_ui'       => true,
            'rewrite'       => array('slug' => 'bbs-career'),
            'has_archive'   => true,
            'query_var'     => true,
            'supports'      => ['title', 'thumbnail', 'revisions', 'page-attributes'],
            'publicly_queryable' => true,
        ));
    }
    // register category for job department
    if (!taxonomy_exists('career_department')) {
        register_taxonomy('career_department', 'bbs-career', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Job Department', 'backbencher'),
                'add_new'             => __('Add Job Department','backbencher'),
                'add_new_item'        => __('Add New Department', 'backbencher'),
                'all_items'           => __('All Department', 'backbencher'),
                'edit_item'           => __('Edit Department', 'backbencher'),
                'update_item'         => __('Update Department', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Department', 'backbencher'),
                'parent_item'         => __('Parent Department', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'career-department'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    // register taxonomy for job types
    if (!taxonomy_exists('career_type')) {
        register_taxonomy('career_type', 'bbs-career', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Job Types', 'backbencher'),
                'add_new'             => __('Add Job Type','backbencher'),
                'add_new_item'        => __('Add New Type', 'backbencher'),
                'all_items'           => __('All Type', 'backbencher'),
                'edit_item'           => __('Edit Type', 'backbencher'),
                'update_item'         => __('Update Type', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Type', 'backbencher'),
                'parent_item'         => __('Parent Type', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'career-type'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    

    // register post type for services //
    if (!post_type_exists('bbs-service')) {
        register_post_type('bbs-service', array(
            'public'        => true,
            'labels'        => array(
                'name'                  => __('BBS Services', 'backbencher'),
                'add_new'               => __('Add New Service', 'backbencher'),
                'add_new_item'          => __('Add New Service', 'backbencher'),
                'edit_item'             => __('Edit Service', 'backbencher'),
                'view_item'             => __('View Service', 'backbencher'),
                'new_item'              => __('New Service', 'backbencher'),
                'featured_image'        => __('Service Image', 'backbencher'),
                'set_featured_image'    => __('Set Service Image', 'backbencher'),
                'remove_featured_image' => __('Remove Service Image', 'backbencher'),
            ),
            'menu_icon'     => 'dashicons-analytics',
            'menu_position' => 22,
            'show_ui'       => true,
            'rewrite'       => array('slug' => 'bbs-service'),
            'has_archive'   => true,
            'query_var'     => true,
            'supports'      => ['title', 'thumbnail', 'editor', 'revisions', 'page-attributes'],
            'publicly_queryable' => true,
        ));
    }
    // register category for service
    if (!taxonomy_exists('bbsservice_cat')) {
        register_taxonomy('bbsservice_cat', 'bbs-service', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Categories', 'backbencher'),
                'add_new'             => __('Add Category','backbencher'),
                'add_new_item'        => __('Add New Category', 'backbencher'),
                'all_items'           => __('All Category', 'backbencher'),
                'edit_item'           => __('Edit Category', 'backbencher'),
                'update_item'         => __('Update Category', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Category', 'backbencher'),
                'parent_item'         => __('Parent Category', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'bbsservice-category'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    // register tag for service
    if (!taxonomy_exists('bbsservice_tags')) {
        register_taxonomy('bbsservice_tags', 'bbs-service', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Tags', 'backbencher'),
                'add_new'             => __('Add Tag','backbencher'),
                'add_new_item'        => __('Add New Tag', 'backbencher'),
                'all_items'           => __('All Tag', 'backbencher'),
                'edit_item'           => __('Edit Tag', 'backbencher'),
                'update_item'         => __('Update Tag', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Tag', 'backbencher'),
                'parent_item'         => __('Parent Tag', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'bbsservice-tag'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    

}


