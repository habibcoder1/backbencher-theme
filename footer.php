<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * This template for displaying footer section
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; ?>

    <?php if(!is_home() && !is_page(623) && !is_singular('career') && !is_page(779)) : ?>
    <!-- =========================
        Footer Top Area Start
    ========================== -->
    <section class="footer-top-area" style="background-color: <?php echo esc_attr( get_theme_mod('bbs_footer_top_bgcolor') ); ?>;">
        <div class="container">
            <div class="row align-items-center footer-first">
                <div class="col-md-8">
                    <div class="footer-title">
                        <h2><?php echo get_theme_mod('bbs_footer_top_content'); ?></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footercontact-btn text-md-end">
                        <?php if(!empty(get_theme_mod('bbs_footertop_contactbtn'))) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('bbs_footer_btnlink')); ?>" class="bbsBtn"><?php echo get_theme_mod('bbs_footertop_contactbtn'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================
        Footer Top Area End
    ========================== -->
    <?php endif; ?>
    <!-- =========================
        Footer Area Start
    ========================== -->
    <footer class="footer-area" style="background-color: <?php echo esc_attr( get_theme_mod('bbs_footer_bottom_bgcolor') ); ?>;">
        <div class="container">
            <div class="row align-items-center footer-second">
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="footer-logo">
                                <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_theme_mod('bbs_footer_logo')); ?>" alt="backbencher-logo"></a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="downloadicon-text">
                                <?php if(!empty(get_theme_mod('bbs_footer_download_btntext'))) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('bbs_footer_download_btnfile')); ?>" class="text-capitalize" download title="<?php echo esc_attr(get_theme_mod('bbs_footer_download_btntitle')); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/downloadiocn.png" class="hidden-img" alt="backbancher-download">
                                    <div class="icon-text">
                                        <div class="companydeck-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/downloadiocn.png" alt="backbancher-download">
                                        </div>
                                        <div class="companydeck-text"><p><?php echo get_theme_mod('bbs_footer_download_btntext'); ?></p></div>
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="footer-social">
                        <ul>
                            <?php $bbsf_dribbble = get_theme_mod('bbs_footer_dribbble') ? get_theme_mod('bbs_footer_dribbble') : 'werbackbenchers'; 
                            if($bbsf_dribbble) : ?>
                            <li><a href="<?php echo esc_url('https://dribbble.com/'.$bbsf_dribbble.''); ?>" target="_blank" class="text-capitalize" title="Dribbble"><?php esc_html_e('dribbble', 'backbencher'); ?></a></li>
                            <?php endif;
                            $bbsf_behance = get_theme_mod('bbs_footer_behance') ? get_theme_mod('bbs_footer_behance') : 'werbackbenchers';
                            if($bbsf_behance) : ?>
                            <li><a href="<?php echo esc_url('https://behance.net/'.$bbsf_behance.''); ?>" target="_blank" class="text-capitalize" title="Behance"><?php esc_html_e('behance', 'backbencher'); ?></a></li>
                            <?php 
                            endif;
                            $bbsf_linkedin = get_theme_mod('bbs_footer_linkedin') ? get_theme_mod('bbs_footer_linkedin') : 'backbencherstudiollc';
                            if($bbsf_linkedin) : ?>
                            <li><a href="<?php echo esc_url('https://linkedin.com/company/'.$bbsf_linkedin.''); ?>" target="_blank" class="text-capitalize" title="LinkedIn"><?php esc_html_e('linkedIn', 'backbencher'); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php if(get_theme_mod('bbs_scroll_top') == 'yes') : ?>
            <!-- scroll top -->
            <div class="bbsscroll_top" data-toggle="tooltip" title="Scroll Top">
                <div class="scroll-icon text-end">
                    <i class="fa-solid fa-arrow-up-long"></i>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </footer>
    <!-- =========================
        Footer Area End
    ========================== -->

    <?php if(is_singular('post') || is_page(30)) : ?>
        <style>
            .footer-top-area{
                background-color: #202123;
            }
        </style>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>
</html>
