<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Video Portfolio Item Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_Home_Video_Portfolio_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-video-portfolio';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Video Portfolio Item', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return ' eicon-video-playlist';
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
		return [ 'bbs', 'backbencher', 'video', 'video-portfolio', 'portfolio', 'custom-cursor' ];
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
			'video-portfolio-item',  //any text here (id)
			[
				'label' => esc_html__( 'Video Portfolio', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // media for video
        $this->add_control(
            'portfolio_video',
            [
                'label'      => esc_html__( 'Select Video', 'backbencher' ),
                'type'       => \Elementor\Controls_Manager::MEDIA,
                'media_types'=> ['video'],  // here 'audio' also possible
                'default'    => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'dynamic'    => [
                    'active'   => true,  //for dynamic tag
                ],
            ]
        );        
        // media for single image
		$this->add_control(
			'video_poster',
			[
				'label' => esc_html__( 'Video Poster', 'backbencher' ),
				'type'  => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        // subtitle
        $this->add_control(
            'port_subtitle',
            [
                'label'       => esc_html__( 'Subtitle', 'backbencher' ),
                'type' 		  => \Elementor\Controls_Manager::TEXT,
                'default' 	  => esc_html__( 'Visit Dribbble' , 'backbencher' ),
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
                'default' 	  => esc_html__( 'EXPLORE OUR WORKS ON DRIBBLE' , 'backbencher' ),
                'label_block' => true,
            ]
        );   
        // switcher
		$this->add_control(
			'video_first_later',
			[
				'label' 	  => esc_html__( 'Order Video', 'backbencher' ),
				'type'  	  => \Elementor\Controls_Manager::SWITCHER,
				'label_on'    => esc_html__( 'Left', 'backbencher' ),
				'label_off'   => esc_html__( 'Right', 'backbencher' ),
				'default' 	  => 'yes' 
			]
		);  
   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['video_poster']) ) : ?>

        <div class="workvideo_customcursor">
            <div class="works-video_details row align-items-center">
                <!-- testimonial video -->
                <div class="col-md-6" style="order: <?php if($settings['video_first_later'] == 'yes'){echo '2';} ?>;">
                    <div class="works-video">
                        <video poster="<?php echo esc_url($settings['video_poster']['url']); ?>" controls="" id="ourworksVideo">
                            <source src="<?php echo esc_url($settings['portfolio_video']['url']); ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="works-details">
                        <div class="works-subtitle">
                            <?php $target   = $settings['subtitle_link']['is_external'] ? 'target="_blank"' : '';
                                $nofollow = $settings['subtitle_link']['nofollow'] ? 'rel="nofollow"' : '';
                                $url      = $settings['subtitle_link']['url'] ? $settings['subtitle_link']['url'] : ''; ?>
                            <a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($nofollow).' '. esc_attr($target); ?> ><h4 class="dot-title"><?php echo $settings['port_subtitle']; ?></h4></a>
                        </div>
                        <div class="works-title dribble-title">
                            <h3 class="text-uppercase"><?php echo $settings['port_title']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
  
	<?php 
		endif;
	}
    

}