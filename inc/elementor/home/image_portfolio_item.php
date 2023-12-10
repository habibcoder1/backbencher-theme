<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Image Portfolio Item Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_Home_Image_Portfolio_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-image-portfolio';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Image Portfolio Item', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-image-hotspot';
	}
	// user can know more from this link (need help link)
	public function get_custom_help_url() {
		return 'http://backbencher.studio';
	}
	// for category
	public function get_categories() {
		return [ 'bbs-category' ];  //developed category
	}
	// keywords for filter/search the widget list
	public function get_keywords() {
		return [ 'bbs', 'backbencher', 'image', 'image-portfolio', 'portfolio', 'custom-cursor' ];
	}
	// for scripts load
	public function get_script_depends() {
		return []; //array key from enqueue script
	}
	// for stylesheet load
	public function get_style_depends() {
		return []; //array key from enqueue style
	}
	// for backend control
    protected function register_controls() {
		// start controls
		$this->start_controls_section(
			'image-portfolio-item',  //any text here (id)
			[
				'label' => esc_html__( 'Image Portfolio', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // media for image
        $this->add_control(
            'portfolio_image',
            [
                'label'      => esc_html__( 'Select Image', 'backbencher' ),
                'type'       => \Elementor\Controls_Manager::MEDIA,
                'default'    => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        ); 
		// image link
        $this->add_control(
			'image_link', 
			[
				'type' 		  => \Elementor\Controls_Manager::URL,  
				'label'		  => esc_html__( 'Image Link', 'backbencher' ),
				'options'     => [ 'url', 'is_external', 'nofollow' ],
				'label_block' => true,
				'default'     => [
					'url'         => '',
					'is_external' => false,
					'nofollow'    => false,
				],
			]
		); 
        // subtitle
        $this->add_control(
            'port_subtitle',
            [
                'label'       => esc_html__( 'Subtitle', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXT,
                'default' 	  => esc_html__( 'Visit Behance' , 'backbencher' ),
                'label_block' => true,
            ]
        );      
        // subtitle link
        $this->add_control(
			'subtitle_link', 
			[
				'type' 		  => \Elementor\Controls_Manager::URL,  
				'label'		  => esc_html__( 'Subtitle Link', 'backbencher' ),
				'options'     => [ 'url', 'is_external', 'nofollow' ],
				'label_block' => true,
				'default'     => [
					'url'         => '',
					'is_external' => false,
					'nofollow'    => false,
				],
			]
		);  
        // Title
        $this->add_control(
            'port_title',
            [
                'label'       => esc_html__( 'Title', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXT,
                'default' 	  => esc_html__( 'EXPLORE OUR PROJECTS ON BEHANCE' , 'backbencher' ),
                'label_block' => true,
            ]
        );   
		// title link
        $this->add_control(
			'title_link', 
			[
				'type' 		  => \Elementor\Controls_Manager::URL,  
				'label'		  => esc_html__( 'Title Link', 'backbencher' ),
				'options'     => [ 'url', 'is_external', 'nofollow' ],
				'label_block' => true,
				'default'     => [
					'url'         => '',
					'is_external' => false,
					'nofollow'    => false,
				],
			]
		); 
        // switcher
		$this->add_control(
			'image_first_later',
			[
				'label' 	  => esc_html__( 'Order Video', 'backbencher' ),
				'type'  	  => \Elementor\Controls_Manager::SWITCHER,
				'label_on'    => esc_html__( 'Left', 'backbencher' ),
				'label_off'   => esc_html__( 'Right', 'backbencher' ),
				'default' 	  => 'yes' 
			]
		);     
		// service button text
		$this->add_control(
			'service_btn_text',
			[
				'label' 	  => esc_html__( 'Service Button Text', 'backbencher' ),
				'type'  	  => \Elementor\Controls_Manager::TEXT,
				'default' 	  => esc_html__( '' , 'backbencher' ),
                'label_block' => true, 
			]
		); 
		// service button link
        $this->add_control(
			'service_btn_url', 
			[
				'type' 		  => \Elementor\Controls_Manager::URL,  
				'label'		  => esc_html__( 'Service Button Link', 'backbencher' ),
				'options'     => [ 'url', 'is_external', 'nofollow' ],
				'label_block' => true,
				'default'     => [
					'url'         => '',
					'is_external' => false,
					'nofollow'    => false,
				],
			]
		); 
            
   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['portfolio_image']) ) : ?>

        <div class="servicewith_customcursor" id="servicewith_customcursor">
			<div class="service-details">
				<div class="row align-items-center">
					<!-- image -->
					<div class="col-md-6" style="order: <?php if($settings['image_first_later'] == 'yes'){echo '2';} ?>;">
						<div class="service-image">
							<?php $target   = $settings['image_link']['is_external'] ? 'target="_blank"' : '';
                                $nofollow = $settings['image_link']['nofollow'] ? 'rel="nofollow"' : '';
                                $url      = $settings['image_link']['url'] ? $settings['image_link']['url'] : ''; ?>
							<a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($nofollow).' '. esc_attr($target); ?> ><img src="<?php echo esc_url($settings['portfolio_image']['url']); ?>"></a>
						</div>
					</div>
					<!-- service details -->
					<div class="col-md-6">
						<div class="service-content">
							<div class="service-subtitle dot-title">
								<?php $subtarget   = $settings['subtitle_link']['is_external'] ? 'target="_blank"' : '';
									$subnofollow = $settings['subtitle_link']['nofollow'] ? 'rel="nofollow"' : '';
									$suburl      = $settings['subtitle_link']['url'] ? $settings['subtitle_link']['url'] : ''; ?>
								<a href="<?php echo esc_url($suburl); ?>" <?php echo esc_attr($subnofollow).' '. esc_attr($subtarget); ?> ><h3 class="text-capitalize"><?php echo $settings['port_subtitle']; ?></h3></a>
							</div>
							<div class="service-title">
								<?php $sebtarget   = $settings['title_link']['is_external'] ? 'target="_blank"' : '';
										$sevnofollow = $settings['title_link']['nofollow'] ? 'rel="nofollow"' : '';
										$sevurl      = $settings['title_link']['url'] ? $settings['title_link']['url'] : ''; ?>
								<a href="<?php echo esc_url($sevurl); ?>" <?php echo esc_attr($sevnofollow).' '. esc_attr($sebtarget); ?> ><h2 class="text-uppercase"><?php echo $settings['port_title']; ?></h2></a>
							</div>
							<!-- only for service items -->
							<?php if(!empty($settings['service_btn_text'])) : ?>
							<div class="service-utton btnwith-customcursor">
								<?php $sertarget   = $settings['service_btn_url']['is_external'] ? 'target="_blank"' : '';
										$sernofollow = $settings['service_btn_url']['nofollow'] ? 'rel="nofollow"' : '';
										$serurl      = $settings['service_btn_url']['url'] ? $settings['service_btn_url']['url'] : ''; ?>
                                <a href="<?php echo esc_url($serurl); ?>" <?php echo esc_attr($sernofollow).' '. esc_attr($sertarget); ?> class="service-btn text-capitalize"><?php echo $settings['service_btn_text']; ?></a>
                            </div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
        
  
	<?php 
		endif;
	}
    

}