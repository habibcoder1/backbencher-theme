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
    // regsiter post type
    register_post_type('bbs-service', array(
        'public'        => true,
        'labels'        => array(
            'name'                  => __('BBS Services', 'backbencher'),
            'add_new'               => __('Add Service', 'backbencher'),
            'add_new_item'          => __('Add New Service', 'backbencher'),
            'edit_item'             => __('Edit Service', 'backbencher'),
            'view_item'             => __('View Service', 'backbencher'),
            'new_item'              => __('New Service', 'backbencher'),
            'featured_image'        => __('Service Image', 'backbencher'),
            'set_featured_image'    => __('Set Service Image', 'backbencher'),
            'remove_featured_image' => __('Remove Service Image', 'backbencher'),
        ),
        'menu_icon'     => 'dashicons-controls-volumeon',
        'menu_position' => 20,
        'show_ui'       => true,
        'rewrite'       => array('slug' => 'backbencher-service'),
        'has_archive'   => true,
        'query_var'     => true,
        // 'taxonomies'       => ['category'],
        'supports'      => ['title', 'editor', 'thumbnail', 'post-formats', 'revisions', 'comments', 'page-attributes'],
        'publicly_queryable' => true,
    ));

    // register category
    register_taxonomy('bbsservice_tax', 'bbs-service', array(
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
        'rewrite'           => array('slug' => 'backbencher-category'),   //taxonomy slug
        'query_var'         => true,
        'has_archive'       => false,
        'show_in_rest'      => true,
        'publicly_queryable'=> true,
        'show_admin_column' => true,
    ));

    // Register Taxonomy for Tag
    register_taxonomy('bbservice_tags', 'bbs-service', array(
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
        'rewrite'           => array('slug' => 'backbencher-tag'),
        'query_var'         => true,
        'show_admin_column' => true,
    ));
}



/* ========================
    Custom Meta Box
======================== */
add_action('add_meta_boxes', 'bbs_custom_metaboxes');
function bbs_custom_metaboxes(){
    add_meta_box( 
        'bbbs_service-metabox',     //unique id
        __('Title & Accordion (for single page)', 'backbencher'),  //title
        'bbs_service_metabox_callback',  //callback function
        'iseba-policy',   // post type
        'normal',         // position
        'high'            // high, side
    );
}
// callback for metabox
function bbs_service_metabox_callback(){ ?>
    
    <div class="bbs_service-metabox">
        <p>
            <label for="service-title"><?php _e('Title', 'backbencher'); ?></label>
            <input type="text" class="regular-text" placeholder="Second title is here" name="service-title" id="service-title" value="<?php echo get_post_meta(get_the_ID(), '_service-title', true); ?>" >
        </p>
                
    </div>

<?php
}
// save post
add_action('save_post', 'bbs_metabox_save_post');
function bbs_metabox_save_post($post_id){
    // for title
    if(isset($_POST['service-title'])){
        update_post_meta( $post_id, '_service-title', $_POST['service-title']);
    }

}