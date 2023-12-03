<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * This template for displaying header section
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- meta tag -->
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <?php if(get_theme_mod('bbs_preloader') == 'yes') : ?>
    <!-- preloader -->
    <div id="preloader">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" alt="preloader-image">
    </div>
    <?php endif; ?>

    <!-- =========================
        Header Area Start
    ========================== -->
    <?php if(get_theme_mod('bbs_sticky_header') == 'yes') : ?>
    <!-- sticky menu -->
    <header class="header-area sticky-menu d-none" style="background-color: <?php echo esc_attr( get_theme_mod('backbencher_header_bgcolor') ); ?>;">
        <div class="container">
            <div class="row align-items-center">
                <!-- main logo -->
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="main-logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo esc_url(get_theme_mod('bbs_mainlogo')); ?>" alt="backbencher-logo">
                        </a>
                    </div>
                </div>
                <!-- contact btn, hambergur menu -->
                <div class="col-md-6 col-sm-6 col-6 text-end">
                    <div class="contactbtn-menuicon">
                        <div class="row align-items-center">
                            <!-- contact btn -->
                            <div class="col-md-10 d-none d-md-block">
                                <?php if(get_theme_mod('bbs_header_contactbtn') == 'yes') : ?>
                                <div class="contact-btn text-end">
                                    <?php $btntext = get_theme_mod('bbs_headercontact_btntext');
                                    if(!empty($btntext)) : ?>
                                        <a href="<?php echo esc_url(get_theme_mod('bbs_header_btnlink')); ?>" class="btn text-uppercase"><?php echo $btntext; ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <!-- menu icon -->
                            <div class="col-md-2">
                                <div class="hambergur-icon">
                                    <i class="fa-solid fa-bars cursor-pointer" title="Open Menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main menu & contact details -->
                <div class="manu-address_area main-nav-menu ">
                    <div class="container">
                        <!-- logo, close icon -->
                        <div class="logo-close_icon">
                            <!-- logo -->
                            <div class="main-logo">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo esc_url(get_theme_mod('bbs_mainlogo')); ?>" alt="backbencher-logo">
                                </a>
                            </div>
                            <!-- close -->
                            <div class="close-icon text-end">
                                <i class="fa-solid fa-xmark" title="Close Menu"></i>
                            </div>
                        </div>
                        <!-- main menu, address -->
                        <div class="menu-address">
                            <!-- main menu -->
                            <nav  class="main-menu">
                                <ul class="primary-menu">
                                    <li>
                                        <a href="#">About 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Service 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Our Works 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">blog 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">career 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- address -->
                            <div class="address_contact">
                                <!-- contact -->
                                <div class="contact-details">
                                    <?php if(!empty(get_theme_mod('bbs_menucontact_text'))) : ?>
                                    <div class="contact-title">
                                        <h4 class="text-uppercase"><?php echo esc_attr(get_theme_mod('bbs_menucontact_text')); ?></h4>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(!empty(get_theme_mod('bbs_menucontact_number'))) : ?>
                                    <div class="contact-number">
                                        <a href="tel:<?php echo get_theme_mod('bbs_menucontact_number'); ?>"><?php echo get_theme_mod('bbs_menucontact_number'); ?></a>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(!empty(get_theme_mod('bbs_menucontact_email'))) : ?>
                                    <div class="contact-email">
                                        <a href="mailto:<?php echo get_theme_mod('bbs_menucontact_email'); ?>"><?php echo get_theme_mod('bbs_menucontact_email'); ?></a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- address -->
                                <div class="address-details">
                                    <?php if(!empty(get_theme_mod('bbs_menu_address_text'))) : ?>
                                    <div class="address-title">
                                        <h4 class="text-uppercase"><?php echo get_theme_mod('bbs_menu_address_text'); ?></h4>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(!empty(get_theme_mod('bbs_menu_location'))) : ?>
                                    <div class="address">
                                        <p><?php echo get_theme_mod('bbs_menu_location'); ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php endif; ?>
    <!-- without sticky menu -->
    <header class="header-area" style="background-color: <?php echo esc_attr( get_theme_mod('backbencher_header_bgcolor') ); ?>;">
        <div class="container">
            <div class="row align-items-center">
                <!-- main logo -->
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="main-logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo esc_url(get_theme_mod('bbs_mainlogo')); ?>" alt="backbencher-logo">
                        </a>
                    </div>
                </div>
                <!-- contact btn, hambergur menu -->
                <div class="col-md-6 col-sm-6 col-6 text-end">
                    <div class="contactbtn-menuicon">
                        <div class="row align-items-center">
                            <!-- contact btn -->
                            <div class="col-md-10 d-none d-md-block">
                                <?php if(get_theme_mod('bbs_header_contactbtn') == 'yes') : ?>
                                <div class="contact-btn text-end">
                                    <?php $btntext = get_theme_mod('bbs_headercontact_btntext');
                                    if(!empty($btntext)) : ?>
                                        <a href="<?php echo esc_url(get_theme_mod('bbs_header_btnlink')); ?>" class="btn text-uppercase"><?php echo $btntext; ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <!-- menu icon -->
                            <div class="col-md-2">
                                <div class="hambergur-icon">
                                    <i class="fa-solid fa-bars cursor-pointer" title="Open Menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main menu & contact details -->
                <div class="manu-address_area main-nav-menu ">
                    <div class="container">
                        <!-- logo, close icon -->
                        <div class="logo-close_icon">
                            <!-- logo -->
                            <div class="main-logo">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo esc_url(get_theme_mod('bbs_mainlogo')); ?>" alt="backbencher-logo">
                                </a>
                            </div>
                            <!-- close -->
                            <div class="close-icon text-end">
                                <i class="fa-solid fa-xmark" title="Close Menu"></i>
                            </div>
                        </div>
                        <!-- main menu, address -->
                        <div class="menu-address">
                            <!-- main menu -->
                            <nav  class="main-menu">
                                <ul class="primary-menu">
                                    <li>
                                        <a href="#">About 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Service 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Our Works 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">blog 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">career 
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <div class="second-arrow">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- address -->
                            <div class="address_contact">
                                <!-- contact -->
                                <div class="contact-details">
                                    <?php if(!empty(get_theme_mod('bbs_menucontact_text'))) : ?>
                                    <div class="contact-title">
                                        <h4 class="text-uppercase"><?php echo esc_attr(get_theme_mod('bbs_menucontact_text')); ?></h4>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(!empty(get_theme_mod('bbs_menucontact_number'))) : ?>
                                    <div class="contact-number">
                                        <a href="tel:<?php echo get_theme_mod('bbs_menucontact_number'); ?>"><?php echo get_theme_mod('bbs_menucontact_number'); ?></a>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(!empty(get_theme_mod('bbs_menucontact_email'))) : ?>
                                    <div class="contact-email">
                                        <a href="mailto:<?php echo get_theme_mod('bbs_menucontact_email'); ?>"><?php echo get_theme_mod('bbs_menucontact_email'); ?></a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- address -->
                                <div class="address-details">
                                    <?php if(!empty(get_theme_mod('bbs_menu_address_text'))) : ?>
                                    <div class="address-title">
                                        <h4 class="text-uppercase"><?php echo get_theme_mod('bbs_menu_address_text'); ?></h4>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(!empty(get_theme_mod('bbs_menu_location'))) : ?>
                                    <div class="address">
                                        <p><?php echo get_theme_mod('bbs_menu_location'); ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =========================
        Header Area End
    ========================== -->
    