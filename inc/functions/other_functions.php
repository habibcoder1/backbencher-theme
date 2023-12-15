<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Theme Functions
 */


if(!defined('ABSPATH')){
    exit('not valid');
};


/* =============================================
  Move the comment text field to the bottom
============================================== */
add_filter( 'comment_form_fields', 'bbs_move_comment_field_to_bottom', 18 );
function bbs_move_comment_field_to_bottom( $fields ) {
    // for textarea field
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;

    return $fields;
};



/* =============================================
  Script load in the bottom
============================================== */
add_action('wp_footer', 'bbs_script_loadin_footer');
function bbs_script_loadin_footer(){ ?> 
<script>
    // preloader
    let preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener("load", function() {
            preloader.style.display = "none";
        });
    }


</script>
    <?php 
}


/* =============================
    Elementor Recommended
============================= */
add_action('admin_notices', 'bbs_recommend_plugin_activation');
function bbs_recommend_plugin_activation() {

    // for required plugins ////////
    $elementor_slug = 'elementor';   //plugin slug
    if (!is_plugin_active($elementor_slug . '/' . $elementor_slug . '.php')) {   //exact plugin folder and file
        $plugin_name = 'Elementor';
        $install_link = wp_nonce_url(admin_url('update.php?action=install-plugin&plugin=' . $elementor_slug), 'install-plugin_' . $elementor_slug);

        $message = sprintf( __('This Theme is required installing and activating the %s plugin for creating a dynamic website %sClick here to install%s.', 'backbencher'), $plugin_name, '<a href="' . $install_link . '">', '</a>' );

        echo '<div class="notice notice-info is-dismissible"><p>' . $message . '</p></div>';
    };
    

    // notice acout table of content /////
    $screen = get_current_screen();
    if (is_admin() && $screen->id === 'edit-post') { ?>
        <div class="tableofcontent-noticeadmin notice notice-warning is-dismissible" style="text-align: center;">
            <p><?php _e('NOTE:: Use Heading h1 or Heading h2 tag for listing in table of content', 'backbencher'); ?></p>
        </div>

    <?php
    }


};



