<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * This template for customizing register
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 

/* ======================
    Theme Customize
======================= */
add_action('customize_register', 'bbs_theme_customizer');
function bbs_theme_customizer($wp_customize){

    /* =========================
        Header Panel
    ========================= */
    $wp_customize->add_panel('bbs_header_panel', [
        'title'       => __('Header Options', 'backbencher'),
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
    ]);

    /* =========================
        Header Section
    ========================= */
    $wp_customize->add_section('backbencher_header', [
        'title'       => __('Header Details', 'backbencher'),
        'description' => __('Heaer BG Color & Text here', 'backbencher'),
        'panel'       => 'bbs_header_panel',
    ]);

    // bg color
    $wp_customize->add_setting('backbencher_header_bgcolor', [
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_bgcolor'
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'backbencher_header_bgcolor', [
        'label'       => __('Header Background Color', 'backbencher'),
        'description' => __('Default: #fff', 'backbencher'),
        'section'     => 'backbencher_header',
        'setting'     => 'backbencher_header_bgcolor',
    ]));
    function sanitize_header_bgcolor($color){
        return sanitize_hex_color($color);
    };

    // header button text
    $wp_customize->add_setting('bbs_headercontact_btntext', [
        'default'           => 'contact us',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_btntext',
    ]);
    $wp_customize->add_control('bbs_headercontact_btntext', [
        'label'       => __('Header Button Text', 'backbencher'),
        'section'     => 'backbencher_header',
        'setting'     => 'bbs_headercontact_btntext',
    ]);
    function sanitize_header_btntext($input){
        return sanitize_text_field($input);
    };

    // header button
    $wp_customize->add_setting('bbs_header_contactbtn', [
        'default'           => 'yes',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_button_onoff'
    ]);
    $wp_customize->add_control('bbs_header_contactbtn', [
        'label'       => __('Header Contact Button Visible/Hide', 'backbencher'),
        'description' => __('default: visible', 'backbencher'),
        'section'     => 'backbencher_header',
        'setting'     => 'bbs_header_contactbtn',
        'type'        => 'select',
        'choices'     => [
            'yes'     => 'Yes',
            'not'     => 'Not'
        ]
    ]);
    function sanitize_button_onoff($bbs_headerbtn, $bbs_headerbtn_setting){
        $bbs_headerbtn = sanitize_key($bbs_headerbtn);
        $valid_options = $bbs_headerbtn_setting->manager->get_control($bbs_headerbtn_setting->id)->choices;

        if (!array_key_exists($bbs_headerbtn, $valid_options)){
            $bbs_headerbtn = $bbs_headerbtn_setting->default;
        }

        return $bbs_headerbtn;
    };

    // header button link
    $wp_customize->add_setting('bbs_header_btnlink', [
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_btnlink',
    ]);
    $wp_customize->add_control('bbs_header_btnlink', [
        'label'       => __('Header Contact Button Link', 'backbencher'),
        'description' => __('copy and paste the full link here.'.'<br>'.'NOTE: If hide button then no need link here', 'backbencher'),
        'section'     => 'backbencher_header',
        'setting'     => 'bbs_header_btnlink',
    ]);
    function sanitize_header_btnlink($input){
        return sanitize_text_field($input);
    };



    /* =========================
       Menu Contact Section
    ========================= */
    $wp_customize->add_section('bbs_menu_contactdetails', [
        'title'       => __('Menu Contact Details', 'backbencher'),
        'description' => __('Menu contact details here', 'backbencher'),
        'panel'       => 'bbs_header_panel',
    ]);

    // contact text
    $wp_customize->add_setting('bbs_menucontact_text', [
        'default'           => 'contact',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_menu_contacttext'
    ]);
    $wp_customize->add_control('bbs_menucontact_text', [
        'label'       => __('Menu Contact Text', 'backbencher'),
        'section'     => 'bbs_menu_contactdetails',
        'setting'     => 'bbs_menucontact_text',
    ]);
    function sanitize_menu_contacttext($input){
        return sanitize_text_field($input);
    };
    
    // contact number
    $wp_customize->add_setting('bbs_menucontact_number', [
        'default'           => '+9767999000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_menu_contactnumber'
    ]);
    $wp_customize->add_control('bbs_menucontact_number', [
        'label'       => __('Menu Contact Number', 'backbencher'),
        'section'     => 'bbs_menu_contactdetails',
        'setting'     => 'bbs_menucontact_number',
    ]);
    function sanitize_menu_contactnumber($input){
        return sanitize_text_field($input);
    };

    // email address
    $wp_customize->add_setting('bbs_menucontact_email', [
        'default'           => 'hello@backbencher.studio',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_menu_contactemail'
    ]);
    $wp_customize->add_control('bbs_menucontact_email', [
        'label'       => __('Menu Contact Email', 'backbencher'),
        'section'     => 'bbs_menu_contactdetails',
        'setting'     => 'bbs_menucontact_email',
    ]);
    function sanitize_menu_contactemail($input){
        return sanitize_text_field($input);
    };

    // contact address text
    $wp_customize->add_setting('bbs_menu_address_text', [
        'default'           => 'address',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_menu_addresstext'
    ]);
    $wp_customize->add_control('bbs_menu_address_text', [
        'label'       => __('Menu Address Text', 'backbencher'),
        'section'     => 'bbs_menu_contactdetails',
        'setting'     => 'bbs_menu_address_text',
    ]);
    function sanitize_menu_addresstext($input){
        return sanitize_text_field($input);
    };

    // contact address
    $wp_customize->add_setting('bbs_menu_location', [
        'default'           => 'Daisy Garden, House 14 (Level-3), Block A, Main Road, Banasree, Dhaka, Bangladesh',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_menu_location'
    ]);
    $wp_customize->add_control('bbs_menu_location', [
        'label'       => __('Menu Address Text', 'backbencher'),
        'section'     => 'bbs_menu_contactdetails',
        'setting'     => 'bbs_menu_location',
        'type'        => 'textarea',
    ]);
    function sanitize_menu_location($input){
        return sanitize_textarea_field($input);
    };
    

    /* =========================
       General Option Section
    ========================= */
    $wp_customize->add_section('bbs_general_option', [
        'title'       => __('General Option', 'backbencher'),
        'description' => __('General option description here', 'backbencher'),
        'priority'    => 12
    ]);

    // main logo
    $wp_customize->add_setting('bbs_mainlogo', [
        'default'           => get_template_directory_uri().'/assets/img/main-logo.png',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_main_logo'
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bbs_mainlogo', [
        'label'       => __('Main Logo', 'backbencher'),
        'section'     => 'bbs_general_option',
        'setting'     => 'bbs_mainlogo'
    ]));
    function sanitize_main_logo($logo_url){
        return esc_url_raw($logo_url);
    };

    // footer logo
    $wp_customize->add_setting('bbs_footer_logo', [
        'default'           => get_template_directory_uri().'/assets/img/footer-logo.png',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_logo',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bbs_footer_logo', [
        'label'       => __('Footer Logo', 'backbencher'),
        'section'     => 'bbs_general_option',
        'setting'     => 'bbs_footer_logo',
    ]));
    function sanitize_footer_logo($logo_url){
        return esc_url_raw($logo_url);
    };


    // preloader
    $wp_customize->add_setting('bbs_preloader', [
        'default'           => 'yes',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_preloader_onoff'
    ]);
    $wp_customize->add_control('bbs_preloader', [
        'label'       => __('Preloader Yes/Not', 'backbencher'),
        'description' => __('default: yes', 'backbencher'),
        'section'     => 'bbs_general_option',
        'setting'     => 'bbs_preloader',
        'type'        => 'select',
        'choices'     => [
            'yes'     => 'Yes',
            'not'     => 'Not'
        ]
    ]);
     // sanitize preloader
    function sanitize_preloader_onoff($bbs_input, $bbs_setting){
        $bbs_input = sanitize_key($bbs_input);
        $valid_options = $bbs_setting->manager->get_control($bbs_setting->id)->choices;

        if (!array_key_exists($bbs_input, $valid_options)){
            $bbs_input = $bbs_setting->default;
        }

        return $bbs_input;
    };

    // scroll to top
    $wp_customize->add_setting('bbs_scroll_top', [
        'default'           => 'yes',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_scrolltop_onoff'
    ]);
    $wp_customize->add_control('bbs_scroll_top', [
        'label'       => __('Scroll Top Yes/Not', 'backbencher'),
        'description' => __('default: yes', 'backbencher'),
        'section'     => 'bbs_general_option',
        'setting'     => 'bbs_scroll_top',
        'type'        => 'select',
        'choices'     => [
            'yes'     => 'Yes',
            'not'     => 'Not'
        ]
    ]);
    function sanitize_scrolltop_onoff($bbs_scrolltop, $bbs_scrolltop_setting){
        $bbs_scrolltop = sanitize_key($bbs_scrolltop);
        $valid_options = $bbs_scrolltop_setting->manager->get_control($bbs_scrolltop_setting->id)->choices;

        if (!array_key_exists($bbs_scrolltop, $valid_options)){
            $bbs_scrolltop = $bbs_scrolltop_setting->default;
        }

        return $bbs_scrolltop;
    };

    // sticky header
    $wp_customize->add_setting('bbs_sticky_header', [
        'default'           => 'yes',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_sticky_header'
    ]);
    $wp_customize->add_control('bbs_sticky_header', [
        'label'       => __('Sticky Header Yes/Not', 'backbencher'),
        'description' => __('default: yes', 'backbencher'),
        'section'     => 'bbs_general_option',
        'setting'     => 'bbs_sticky_header',
        'type'        => 'select',
        'choices'     => [
            'yes'     => 'Yes',
            'not'     => 'Not'
        ]
    ]);
     // sanitize preloader
    function sanitize_sticky_header($bbs_sticky_input, $bbs_sticky_setting){
        $bbs_sticky_input = sanitize_key($bbs_sticky_input);
        $valid_options = $bbs_sticky_setting->manager->get_control($bbs_sticky_setting->id)->choices;

        if (!array_key_exists($bbs_sticky_input, $valid_options)){
            $bbs_sticky_input = $bbs_sticky_setting->default;
        }

        return $bbs_sticky_input;
    };


    /* =========================
       Footer Option Panel
    ========================= */
    $wp_customize->add_panel('bbs_footer_panel', [
        'title'       => __('Footer Option', 'backbencher'),
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
    ]);

    /* =========================
       Footer Top Section
    ========================= */
    $wp_customize->add_section('bbs_footer_top', [
        'title'       => __('Footer Top', 'backbencher'),
        'description' => __('Footer Top Details', 'backbencher'),
        'panel'       => 'bbs_footer_panel',
    ]);

    // bg color
    $wp_customize->add_setting('bbs_footer_top_bgcolor', [
        'default'           => '#0a090f',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_top_bgcolor'
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bbs_footer_top_bgcolor', [
        'label'       => __('Footer Top Background Color', 'backbencher'),
        'section'     => 'bbs_footer_top',
        'setting'     => 'bbs_footer_top_bgcolor',
    ]));
    function sanitize_footer_top_bgcolor($color){
        return sanitize_hex_color($color);
    };

    // footer top content
    $wp_customize->add_setting('bbs_footer_top_content', [
        'default'           => 'DO NOT HESITATE TO ASK US ANY QUESTIONS',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_topcontent'
    ]);
    $wp_customize->add_control('bbs_footer_top_content', [
        'label'       => __('Footer Top Content', 'backbencher'),
        'section'     => 'bbs_footer_top',
        'setting'     => 'bbs_footer_top_content',
        'type'        => 'textarea',
    ]);
    function sanitize_footer_topcontent($texarea){
        return sanitize_textarea_field($texarea);
    };

    // footer top contact btn
    $wp_customize->add_setting('bbs_footertop_contactbtn', [
        'default'           => 'contact us',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_btn_text'
    ]);
    $wp_customize->add_control('bbs_footertop_contactbtn', [
        'label'       => __('Footer Top Contact Button Text', 'backbencher'),
        'section'     => 'bbs_footer_top',
        'setting'     => 'bbs_footertop_contactbtn',
    ]);
    function sanitize_footer_btn_text($input){
        return sanitize_text_field($input);
    };

    // footer button link
    $wp_customize->add_setting('bbs_footer_btnlink', [
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footertop_btnlink',
    ]);
    $wp_customize->add_control('bbs_footer_btnlink', [
        'label'       => __('Header Contact Button Link', 'backbencher'),
        'description' => __('copy and paste the full link here.', 'backbencher'),
        'section'     => 'bbs_footer_top',
        'setting'     => 'bbs_footer_btnlink',
    ]);
    function sanitize_footertop_btnlink($input){
        return sanitize_text_field($input);
    };
    
    /* =========================
       Footer Bottom Section
    ========================= */
    $wp_customize->add_section('bbs_footer_bottom', [
        'title'       => __('Footer Bottom', 'backbencher'),
        'description' => __('Footer Bottom Details', 'backbencher'),
        'panel'       => 'bbs_footer_panel',
    ]);

    // bg color
    $wp_customize->add_setting('bbs_footer_bottom_bgcolor', [
        'default'           => '#0a090f',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_bottom_bgcolor'
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bbs_footer_bottom_bgcolor', [
        'label'       => __('Footer Bottom Background Color', 'backbencher'),
        'section'     => 'bbs_footer_bottom',
        'setting'     => 'bbs_footer_bottom_bgcolor',
    ]));
    function sanitize_footer_bottom_bgcolor($color){
        return sanitize_hex_color($color);
    };

    // download button text
    $wp_customize->add_setting('bbs_footer_download_btntext', [
        'default'           => 'company deck',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_downloadbtn_text'
    ]);
    $wp_customize->add_control('bbs_footer_download_btntext', [
        'label'       => __('Download Text', 'backbencher'),
        'section'     => 'bbs_footer_bottom',
        'setting'     => 'bbs_footer_download_btntext',
    ]);
    function sanitize_downloadbtn_text($input){
        return sanitize_text_field($input);
    };

    // download button title
    $wp_customize->add_setting('bbs_footer_download_btntitle', [
        'default'           => 'Download a PDF',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_downloadbtn_title'
    ]);
    $wp_customize->add_control('bbs_footer_download_btntitle', [
        'label'       => __('Download Button Title', 'backbencher'),
        'description'       => __('lowercase/uppercase sensitive', 'backbencher'),
        'section'     => 'bbs_footer_bottom',
        'setting'     => 'bbs_footer_download_btntitle',
    ]);
    function sanitize_downloadbtn_title($input){
        return sanitize_text_field($input);
    };

    // Download button file upload
    $wp_customize->add_setting('bbs_footer_download_btnfile', [
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_downloadbtn_file'
    ]);

    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'bbs_footer_download_btnfile', [
        'label'       => __('Downloadable File', 'backbencher'),
        'section'     => 'bbs_footer_bottom',
        'settings'    => 'bbs_footer_download_btnfile',
    ]));
    function sanitize_downloadbtn_file($download_file_url){
        return esc_url_raw($download_file_url);
    };

     /* =========================
       Footer Social Section
    ========================= */
    $wp_customize->add_section('bbs_footer_social', [
        'title'       => __('Footer Social Items', 'backbencher'),
        'description' => __('Footer Social Items Details', 'backbencher'),
        'panel'       => 'bbs_footer_panel',
    ]);

    // dribbble
    $wp_customize->add_setting('bbs_footer_dribbble', [
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_dribbble',
    ]);
    $wp_customize->add_control('bbs_footer_dribbble', [
        'label'       => __('Dribbble username', 'backbencher'),
        'section'     => 'bbs_footer_social',
        'setting'     => 'bbs_footer_dribbble',
    ]);
    function sanitize_footer_dribbble($input){
        return sanitize_text_field($input);
    };
   
    // Behance
    $wp_customize->add_setting('bbs_footer_behance', [
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_behance',
    ]);
    $wp_customize->add_control('bbs_footer_behance', [
        'label'       => __('Behance username', 'backbencher'),
        'section'     => 'bbs_footer_social',
        'setting'     => 'bbs_footer_behance',
    ]);
    function sanitize_footer_behance($input){
        return sanitize_text_field($input);
    };

    // linkedin
    $wp_customize->add_setting('bbs_footer_linkedin', [
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_linkedin',
    ]);
    $wp_customize->add_control('bbs_footer_linkedin', [
        'label'       => __('LinkedIn username', 'backbencher'),
        'section'     => 'bbs_footer_social',
        'setting'     => 'bbs_footer_linkedin',
    ]);
    function sanitize_footer_linkedin($input){
        return sanitize_text_field($input);
    };
    

}
