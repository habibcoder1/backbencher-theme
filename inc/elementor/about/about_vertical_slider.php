<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * About Vertical Slider Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_About_Vertical_Slider_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-about-vertical-slider';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'About Vertical Slider', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-slider-vertical';
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
		return [ 'bbs', 'backbencher', 'vertical', 'vertical-slider', 'slider' ];
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
			'about-vertical-slider',  //any text here (id)
			[
				'label' => esc_html__( 'Slider Details', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // repeater
		$this->add_control(
			'slider_items',
			[ 
				'label'        => esc_html__( 'Slider Items', 'backbencher' ),
				'description'  => esc_html__( 'Min 8 items', 'backbencher' ),
				'type'         => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'single_slider',
						'label'       => esc_html__( 'Single Slider Item', 'backbencher' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Website Development' , 'backbencher' ),
						'label_block' => true,
					]
					
				],
				'default' => [
					[
						'single_slider'   => esc_html__( 'Slider #1', 'backbencher' ),
					],
				],
				'title_field' => '{{{ single_slider }}}',
			]
		);
   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['slider_items']) ) : ?>

        <div class="about_service-area">
            <div class="aboutservice-slider">
                <ul class="serviceitems">
                    <?php if(! empty($settings['slider_items']) && is_array($settings['slider_items'])) :
                        foreach($settings['slider_items'] as $item) : ?>
                            <li class="text-uppercase text-center"><?php echo $item['single_slider']; ?></li>
                        <?php 
                        endforeach;
                    endif; ?>
                </ul>
            </div>
        </div>
        
        
  
	<?php 
		endif;
	}
    

}