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


    /* ==================================
        Video play & fullscreen onhover
    ================================== */
    document.addEventListener("DOMContentLoaded", function () {
        let heroVideo = document.getElementById("heroVideo");
        let isPlaying = false;

        if(heroVideo){
            heroVideo.addEventListener("mouseenter", function () {
                if (!isPlaying) {
                    isPlaying = true;
                    heroVideo.play()
                        .then(() => {
                            if (heroVideo.requestFullscreen) {
                                heroVideo.requestFullscreen();
                            } else if (heroVideo.mozRequestFullScreen) {
                                heroVideo.mozRequestFullScreen();
                            } else if (heroVideo.webkitRequestFullscreen) {
                                heroVideo.webkitRequestFullscreen();
                            } else if (heroVideo.msRequestFullscreen) {
                                heroVideo.msRequestFullscreen();
                            }
                        })
                        .catch(error => {
                            console.error("Error playing video:", error);
                        });
                }
            });

            heroVideo.addEventListener("mouseleave", function () {
                if (isPlaying) {
                    isPlaying = false;
                    heroVideo.pause();
                }
            });
        }
         
    });

    /* =======================================
        for custom cursor in video section  (will load exact page //home page)
    ======================================= */
    let heroVideoSec = document.querySelector(".hero_video-area");
    let customCursor = document.querySelector(".custom-cursor");

    if (heroVideoSec && customCursor) {
        heroVideoSec.addEventListener("mouseenter", function() {
            customCursor.style.display = "block";
        });
        heroVideoSec.addEventListener("mouseleave", function() {
            customCursor.style.display = "none";
        });
        heroVideoSec.addEventListener("mousemove", function(e) {
            const x = e.clientX;
            const y = e.clientY;

            customCursor.style.left = x + "px";
            customCursor.style.top = y + "px";
        });
    }

    
    /* =======================================
        custom cursor for testimonial  (will load exact page //home page)
    ======================================= */
    let testimonialContainer = document.querySelector(".testimonial-container");
    let testiCustomCursor    = document.querySelector(".testicustom-cursor"); 

    if(testimonialContainer && testiCustomCursor){
        testimonialContainer.addEventListener("mouseenter", function () {
            testiCustomCursor.style.display = "block";
        });
        testimonialContainer.addEventListener("mouseleave", function () {
            testiCustomCursor.style.display = "none";
        });
        testimonialContainer.addEventListener("click", function () {
            customCursor.style.display = "block";
        });
        testimonialContainer.addEventListener("mousemove", function (e) {
            const x = e.clientX;
            const y = e.clientY;
        
            testiCustomCursor.style.left = x + "px";
            testiCustomCursor.style.top = y + "px";
        });
    } 
    

    /* =======================================
        custom cursor for service items  (will load exact page //service page)
    ======================================= */
    let serviceContainer = document.querySelector(".serviceitems-area .container");
    let serviceCustomCursor    = document.querySelector(".servicecustom-cursor"); 

    if(serviceContainer && serviceCustomCursor){
        serviceContainer.addEventListener("mouseenter", function () {
            serviceCustomCursor.style.display = "block";
        });
        serviceContainer.addEventListener("mouseleave", function () {
            serviceCustomCursor.style.display = "none";
        });
        serviceContainer.addEventListener("click", function () {
            customCursor.style.display = "block";
        });
        serviceContainer.addEventListener("mousemove", function (e) {
            const x = e.clientX;
            const y = e.clientY;
        
            serviceCustomCursor.style.left = x + "px";
            serviceCustomCursor.style.top = y + "px";
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
    $elementor_slug = 'elementor';   //plugin slug

    if (!is_plugin_active($elementor_slug . '/' . $elementor_slug . '.php')) {   //exact plugin folder and file
        $plugin_name = 'Elementor';
        $install_link = wp_nonce_url(admin_url('update.php?action=install-plugin&plugin=' . $elementor_slug), 'install-plugin_' . $elementor_slug);

        $message = sprintf( __('We recommend installing and activating the %s plugin for creating Ecommerce Functionality %sClick here to install%s.', 'atsbd'), $plugin_name, '<a href="' . $install_link . '">', '</a>' );

        echo '<div class="notice notice-info is-dismissible"><p>' . $message . '</p></div>';
    }
};