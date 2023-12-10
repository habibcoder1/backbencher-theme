<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 




// Check if Elementor is active
if (in_array('elementor/elementor.php', get_option('active_plugins'))) {
    // Elementor is active
    

	// Register Widget //
    add_action( 'elementor/widgets/register', 'bbs_register_elementor_widgets' );
	function bbs_register_elementor_widgets( $widgets_manager ) {

        //  File Require for Home page
		require_once( __DIR__ . '/home/home_hero_area.php' );
		require_once( __DIR__ . '/home/home_testimonial_slider.php' );
		require_once( __DIR__ . '/home/home_marque_animation.php' );
		require_once( __DIR__ . '/home/video_portfolio_item.php' );
		require_once( __DIR__ . '/home/image_portfolio_item.php' );
		require_once( __DIR__ . '/home/hero_magic_video.php' );
		require_once( __DIR__ . '/home/work_case_studies.php' );
		
		// file require for about page
		require_once( __DIR__ . '/about/about_vertical_slider.php' );


        // Class for Home page
		$widgets_manager->register( new \Bbs_Home_Hero_Area_Widget_Dev() );
		$widgets_manager->register( new \Bbs_Home_Testimonial_Slider_Widget_Dev() );
		$widgets_manager->register( new \Bbs_Home_Marque_Animation_Widget_Dev() );
		$widgets_manager->register( new \Bbs_Home_Video_Portfolio_Widget_Dev() );
		$widgets_manager->register( new \Bbs_Home_Image_Portfolio_Widget_Dev() );
		$widgets_manager->register( new \Bbs_Home_Hero_Video_Widget_Dev() );
		$widgets_manager->register( new \Bbs_Home_Work_Case_Studies_Widget_Dev() );
		
		// Class for About Page
		$widgets_manager->register( new \Bbs_About_Vertical_Slider_Widget_Dev() );

	};	

	// Enqueues All //
	add_action('elementor/frontend/after_register_scripts', 'bbbs_enqueue_elementor_scripts');
	function bbbs_enqueue_elementor_scripts() {
		// javascript
		wp_register_script('bbs-portfolio-video-script', get_template_directory_uri().'/inc/elementor/js/cursor_port_video.js', ['jquery'], '1.0.0', true);

		wp_register_script('bbs-hero-video-script', get_template_directory_uri().'/inc/elementor/js/cursor_hero_video.js', ['jquery'], '1.0.0', true);

		wp_register_script('bbs-casestudies-tab-script', get_template_directory_uri().'/inc/elementor/js/work_casestudies_tab.js', ['jquery'], '1.0.0', true);

	}
	


	// Register New Category //
    add_action( 'elementor/elements/categories_registered', 'bbs_elementor_category_register' );
	function bbs_elementor_category_register( $elements_manager ) {
		$elements_manager->add_category( 'bbs-category', [
				'title' => esc_html__( 'BBS Widgets', 'backbencher' ),
				'icon'  => 'fa fa-plug', 
			]
		);


        // for setting category in top 
        $categories = [];
        $categories['bbs-category'] =
            [
                'title' => esc_html__( 'BBS Widgets', 'backbencher' ),
				'icon'  => 'fa fa-plug', 
            ];

        $old_categories = $elements_manager->get_categories();
        $categories = array_merge($categories, $old_categories);

        $set_categories = function ( $categories ) {
            $this->categories = $categories;
        };

        $set_categories->call( $elements_manager, $categories );

	}



}

