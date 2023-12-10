<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Hero Magic Video Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_Home_Hero_Video_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-magic-video';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Magic Video', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-video-camera';
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
		return [ 'bbs', 'backbencher', 'video', 'magic-video', 'hero-video', 'custom-cursor' ];
	}
	// for scripts load
	public function get_script_depends() {
		return ['bbs-hero-video-script']; //array key from enqueue script
	}
	// for stylesheet load
	public function get_style_depends() {
		return []; //array key from enqueue style
	}
	// for backend control
    protected function register_controls() {
		// start controls
		$this->start_controls_section(
			'hero-magic-video',  //any text here (id)
			[
				'label' => esc_html__( 'Video Details', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // media for image
        $this->add_control(
            'video_poster',
            [
                'label'      => esc_html__( 'Video Overlay Image', 'backbencher' ),
                'type'       => \Elementor\Controls_Manager::MEDIA,
                'default'    => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        ); 
		// media for video
		$this->add_control(
			'magic_video',
			[
				'label'      => esc_html__( 'Select Video', 'backbencher' ),
				'type'       => \Elementor\Controls_Manager::MEDIA,
				'media_types'=> ['video'],  
				'default'    => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'dynamic'    => [
					'active'   => true,  
				],
			]
		); 
   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['magic_video']) ) : ?>

		<div class="hero_video-area">
			<div class="hero-video">
				<video poster="<?php echo esc_url($settings['video_poster']['url']); ?>" controls id="heroVideo">
					<source src="<?php echo esc_url($settings['magic_video']['url']); ?>" type="video/mp4">
				</video>
			</div>
		</div>
        
  
	<?php 
		endif;
	}
    

}