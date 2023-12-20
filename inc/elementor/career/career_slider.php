<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Career Slider Elementor Widget Development 
 * */ 

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_Career_Slider_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-career-slider';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Career Slider', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-slider-full-screen';
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
		return [ 'bbs', 'backbencher', 'career', 'slider', 'career-slider' ];
	}
	// for scripts load
	public function get_script_depends() {
		return ['bbs-career-slider-script']; //array key from enqueue script
	}
	// for stylesheet load
	public function get_style_depends() {
		return []; //array key from enqueue style
	}
	// for backend control
    protected function register_controls() {
		// start controls
		$this->start_controls_section(
			'career-slider',  //any text here (id)
			[
				'label' => esc_html__( 'Career Slider Details', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);
        // brand title
        $this->add_control(
            'brand_text',
            [
                'label'       => esc_html__( 'Brand Text', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXT,
                'default' 	  => esc_html__( 'Backbencher Studio' , 'backbencher' ),
                'label_block' => true,
            ]
        );

        // repeater
		$this->add_control(
			'career_slider_item',
			[
				'label'       => esc_html__( 'Career Slider', 'backbencher' ),
				'description' => esc_html__( 'Even image items will be small', 'backbencher' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => [
					[
						'name' 	  => 'career_slide_image',
						'label'   => esc_html__( 'Career Image', 'backbencher' ),
                        'type'    => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
					],
					[
						'name' 		  => 'career_image_alt',
						'label'       => esc_html__( 'Career Image Alt', 'backbencher' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Career Image' , 'backbencher' ),
						'label_block' => true,
					],
                    
				],
				'default' => [
					[
						'career_image_alt'   => esc_html__( 'Career Image', 'backbencher' ),
					],
				],
				'title_field' => '{{{ career_image_alt }}}',
			]
		);
        

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['career_slider_item']) ) : ?>

        <!--  career slider -->
        <div class="career-slider">
            <div class="slider_items">
                <ul class="career-slider_items">
                    <?php if (!empty($settings['career_slider_item']) && is_array($settings['career_slider_item'])) : 
                        foreach (  $settings['career_slider_item'] as $item ) : ?>
                        <li>
                            <img src="<?php echo esc_url($item['career_slide_image']['url']); ?>" alt="<?php echo $item['career_image_alt']; ?>">
                        </li>
                        <?php endforeach;
                    endif; ?>
                </ul>
            </div>
            <div class="backbencher-text">
                <h2 class="text-uppercase text-end"><?php echo $settings['brand_text']; ?></h2>
            </div>
        </div>
  
	<?php 
		endif;
	}
    

}