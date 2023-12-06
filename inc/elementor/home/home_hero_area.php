<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Hero Hero Area Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_Home_Hero_Area_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-hero-area';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'BBS Hero Area', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-gallery-justified';
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
		return [ 'bbs', 'backbencher', 'hero', 'animation', 'hero-area', 'hero-animation' ];
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
			'hero-area',  //any text here (id)
			[
				'label' => esc_html__( 'Hero Area', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // media for image
        $this->add_control(
            'hello_image',
            [
                'label'      => esc_html__( 'Hello Image', 'backbencher' ),
                'type'       => \Elementor\Controls_Manager::MEDIA,
                'default'    => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        ); 
        // unleash potential
        $this->add_control(
            'unleash_potential',
            [
                'label'       => esc_html__( 'Unleash Potential Text', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXT,
                'default' 	  => esc_html__( 'Unleash Potential' , 'backbencher' ),
                'label_block' => true,
            ]
        );
        // with a text
        $this->add_control(
            'with_a_text',
            [
                'label'       => esc_html__( 'With A Text', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXT,
                'default' 	  => esc_html__( 'With A' , 'backbencher' ),
                'label_block' => true,
            ]
        );
        // digital text
        $this->add_control(
            'digital_text',
            [
                'label'       => esc_html__( 'Digital Text', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXT,
                'default' 	  => esc_html__( 'Digital' , 'backbencher' ),
                'label_block' => true,
            ]
        );
        // repeater
		$this->add_control(
			'marque_animation_items',
			[
				'label'  => esc_html__( 'Marque Animation Items', 'backbencher' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'animation_text',
						'label'       => esc_html__( 'Animatmion Title', 'backbencher' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Design' , 'backbencher' ),
						'label_block' => true,
					],
					[
						'name' 		 => 'animation_image',
						'label' => esc_html__( 'Animation Image', 'backbencher' ),
                        'type'  => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
					],
					
				],
				'default' => [
					[
						'animation_text'   => esc_html__( 'Item #1', 'backbencher' ),
					],
				],
				'title_field' => '{{{ animation_text }}}',
			]
		);

        // airplane image
        $this->add_control(
            'airplane_image',
            [
                'label'      => esc_html__( 'Airplane Image', 'backbencher' ),
                'type'       => \Elementor\Controls_Manager::MEDIA,
                'default'    => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        ); 
		// hero content
        $this->add_control(
            'hero_content',
            [
                'label'       => esc_html__( 'Hero Content', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXTAREA,
                'default' 	  => esc_html__( 'We are an ambitious design agency, with vast expertise on providing innovative design solutions and dynamic partnerships. Essentially, we\'re your design superstars!' , 'backbencher' ),
                'label_block' => true,
            ]
        );
		// studio text
        $this->add_control(
            'studio_text',
            [
                'label'       => esc_html__( 'Studio Text', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXT,
                'default' 	  => esc_html__( 'Studio' , 'backbencher' ),
                'label_block' => true,
            ]
        );
   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['digital_text']) ) : ?>

        <div class="hero-area">
            <div class="hero-first">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-3">
                        <div class="hello-img d-none d-md-block">
                            <img src="<?php echo esc_url($settings['hello_image']['url']); ?>" alt="hello-image">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="hero-first-title">
                            <h2 class="text-uppercase"><?php echo $settings['unleash_potential']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-second">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-title">
                            <h2><?php echo $settings['with_a_text']; ?></h2>
                            <h1 class="text-uppercase digital-ddesign"><?php echo $settings['digital_text']; ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="herotitle-wrapper">
                            <!-- marque items -->
                            <ul class="hero-title-icon">
                                <?php
                                if (!empty($settings['marque_animation_items']) && is_array($settings['marque_animation_items'])) : 
                                    foreach($settings['marque_animation_items'] as $item) : ?>
                                    <!-- single marque -->
                                    <li class="hero-titleicon-item">
                                        <h1 class="text-uppercase"><?php echo $item['animation_text']; ?></h1>
                                        <img src="<?php echo esc_url($item['animation_image']['url']); ?>" alt="backbancher-image">
                                    </li>
                                <?php  
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-third">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="hero-airplane">
                            <img src="<?php echo esc_url($settings['airplane_image']['url']); ?>" alt="backbancher">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="hero-content">
                            <p><?php echo $settings['hero_content']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="hero-title">
                            <h2 class="text-uppercase"><?php echo $settings['studio_text']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
	<?php 
		endif;
	}
    

}