<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Testimonial Slider Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_Home_Testimonial_Slider_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-testimonial-slider';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Testimonial Slider', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-testimonial-carousel';
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
		return [ 'bbs', 'backbencher', 'testimonial', 'slider', 'testimonial-slider' ];
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
			'testimonial-slider',  //any text here (id)
			[
				'label' => esc_html__( 'Testimonial Slider', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // repeater
		$this->add_control(
			'testimonial_slider_item',
			[
				'label'  => esc_html__( 'Testimonial Slider', 'backbencher' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'testi_title',
						'label'       => esc_html__( 'Testimonial Title', 'backbencher' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Great relaxing work' , 'backbencher' ),
						'label_block' => true,
					],
					[
						'name' 		 => 'testi_content',
						'label' 	 => esc_html__( 'Testimonial Content', 'backbencher' ),
						'type'		 => \Elementor\Controls_Manager::TEXTAREA,
						'default' 	 => esc_html__( 'List Content' , 'backbencher' ),
					],
					[
						'name' 		 => 'testimonial_image',
						'label' => esc_html__( 'Testimonial Image', 'backbencher' ),
                        'type'  => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
					],
					[
						'name' 		 => 'testimonial_image_alt',
						'label' => esc_html__( 'Testimonial Image Alt', 'backbencher' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Testimonial Image' , 'backbencher' ),
						'label_block' => true,
					],
                    [
						'name'        => 'person_name',
						'label'       => esc_html__( 'Testimonial Person Name', 'backbencher' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Jhon Doe' , 'backbencher' ),
						'label_block' => true,
					],
                    [
						'name' 		 => 'testimonial_person_image',
						'label' => esc_html__( 'Testimonial Person Image', 'backbencher' ),
                        'type'  => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
					],
                    [
						'name'        => 'person_designation',
						'label'       => esc_html__( 'Testimonial Person Designation', 'backbencher' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Managing Director' , 'backbencher' ),
						'label_block' => true,
					],
					
				],
				'default' => [
					[
						'testi_title'   => esc_html__( 'Testimonial #1', 'backbencher' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'backbencher' ),
					],
				],
				'title_field' => '{{{ testi_title }}}',
			]
		);
        

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['testimonial_slider_item']) ) : ?>

       <!-- testimonial details -->
       <div class="testimonial-container">
            <div class="testimonial-details">
                <?php if (!empty($settings['testimonial_slider_item']) && is_array($settings['testimonial_slider_item'])) : 
                foreach (  $settings['testimonial_slider_item'] as $item ) : ?>
                <!-- single testimonial -->
                <div class="single-testimonial">
                    <div class="testimonial-content">
                        <!-- testi title -->
                        <div class="testimonial-title">
                            <h4><?php echo $item['testi_title']; ?></h4>
                        </div>
                        <!-- testi comment -->
                        <div class="testimonial-comments">
                            <p><?php echo $item['testi_content']; ?></p>
                        </div>
                        <!-- testi author -->
                        <div class="testimonial-authordetails">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-3">
                                    <div class="author-img">
                                        <img src="<?php echo esc_url($item['testimonial_person_image']['url']); ?>" alt="<?php echo $item['person_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-10 col-9">
                                    <!-- author name -->
                                    <div class="author-name">
                                        <h3><?php echo $item['person_name']; ?></h3>
                                    </div>
                                    <!-- author position -->
                                    <div class="author-position">
                                        <h4><?php echo $item['person_designation']; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial video -->
                    <div class="testimonial-image">
                        <div class="testimonial-video">
                            <img src="<?php echo esc_url($item['testimonial_image']['url']); ?>" alt="<?php echo esc_attr($item['testimonial_image_alt']); ?>">
                        </div>
                    </div>
                </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
  
	<?php 
		endif;
	}
    

}