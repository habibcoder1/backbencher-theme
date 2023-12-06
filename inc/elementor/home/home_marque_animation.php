<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Marque animation Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_Home_Marque_Animation_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-marque-animation';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Marque Animation', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-animation-text';
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
		return [ 'bbs', 'backbencher', 'marque', 'animation', 'marque-animation' ];
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
			'marque-animation',  //any text here (id)
			[
				'label' => esc_html__( 'Marque Animation', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // repeater
		$this->add_control(
			'marque_animation_item',
			[ 
				'label'  => esc_html__( 'Marque Animation Items', 'backbencher' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'animation_title',
						'label'       => esc_html__( 'Animation Title', 'backbencher' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Great relaxing work' , 'backbencher' ),
						'label_block' => true,
					],
					[
						'name' 		 => 'animation_icon',
						'label' => esc_html__( 'Animation Icon', 'backbencher' ),
                        'type'  => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
					]
					
				],
				'default' => [
					[
						'animation_title'   => esc_html__( 'Animation #1', 'backbencher' ),
					],
				],
				'title_field' => '{{{ animation_title }}}',
			]
		);
        

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['marque_animation_item']) ) : ?>

        <!-- marque animation -->
        <div class="work-step_animation">
            <div class="workanimation-wrap">
                <ul class="workanimation-items">
                    <?php if (!empty($settings['marque_animation_item']) && is_array($settings['marque_animation_item'])) : 
                    foreach (  $settings['marque_animation_item'] as $item ) : ?>
                    <!-- single item -->
                    <li class="workanimation-singleitem">
                        <h1 class="text-uppercase"><?php echo $item['animation_title']; ?></h1>
                        <img src="<?php echo $item['animation_icon']['url']; ?>" alt="backbancher">
                    </li>
                    <?php endforeach;
                    endif; ?>
                </ul>
            </div>
        </div>
  
	<?php 
		endif;
	}
    

}