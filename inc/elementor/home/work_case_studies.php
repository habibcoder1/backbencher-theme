<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Work & Case Studies Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 

class Bbs_Home_Work_Case_Studies_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'bbs-work-casestudies';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'BBS Work & Case Studies', 'backbencher' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-accordion';
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
		return [ 'bbs', 'backbencher', 'work', 'case-studies', 'accordion', 'work-steps' ];
	}
	// for scripts load
	public function get_script_depends() {
		return ['bbs-casestudies-tab-script']; //array key from enqueue script
	}
	// for stylesheet load
	public function get_style_depends() {
		return []; //array key from enqueue style
	}
	// for backend control
    protected function register_controls() {
		// start controls
		$this->start_controls_section(
			'work-case-studies',  //any text here (id)
			[
				'label' => esc_html__( 'Work & Case Studies', 'backbencher' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        
        // repeater
		$this->add_control(
			'work_casestudies_tabs',
			[
				'label'  => esc_html__( 'Work & Case Studies', 'backbencher' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'tab_item_text',
						'label'       => esc_html__( 'Tab Item', 'backbencher' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'UI/UX Design' , 'backbencher' ),
						'label_block' => true,
					],
                    // repeater
                    [
                        'name'   => 'work_casestudies_items',
                        'label'  => esc_html__( 'Item Details', 'backbencher' ),
                        'type'   => \Elementor\Controls_Manager::REPEATER,
                        'fields' => [
                            [
                                'name'        => 'tab_details_item',
                                'label'       => esc_html__( 'Service Items', 'backbencher' ),
                                'type' 		  => \Elementor\Controls_Manager::TEXT,
                                'default' 	  => esc_html__( 'Website Design' , 'backbencher' ),
                                'label_block' => true,
                            ],
                            [
                                'name'        => 'tab_details_item_link',
                                'label'       => esc_html__( 'Service Redirect Link', 'backbencher' ),
                                'type' 		  => \Elementor\Controls_Manager::URL,
                                'options'     => [ 'url', 'is_external', 'nofollow' ],
                                'label_block' => true,
                                'default'     => [
                                    'url'         => '',
                                    'is_external' => false,
                                    'nofollow'    => false,
                                ],
                            ],
                            
                        ],
                        'default' => [
                            [
                                'tab_details_item'   => esc_html__( 'Item #1', 'backbencher' ),
                            ],
                        ],
                        'title_field' => '{{{ tab_details_item }}}',
                    ],
                    // title
                    [
						'name'        => 'about_service',
						'label'       => esc_html__( 'About Service', 'backbencher' ),
						'type' 		  => \Elementor\Controls_Manager::TEXTAREA,
						'default' 	  => esc_html__( 'From wireframing to prototyping, we immerse ourselves in understanding your user\'s journey, ensuring every click is purposeful and every interaction is delightful.' , 'backbencher' ),
						'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
					],
                    
					
				],
				'default' => [
					[
						'tab_item_text'   => esc_html__( 'Case Studies #1', 'backbencher' ),
					],
				],
				'title_field' => '{{{ tab_item_text }}}',
			]
		);

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['work_casestudies_tabs']) ) : ?>

        <div class="work-casestudies-area">
            <div class="work-casestudies-tab">
                <!-- tab items -->
                <ul class="tab-items">
                    <?php if(! empty($settings['work_casestudies_tabs']) && is_array($settings['work_casestudies_tabs'])) : 
                    foreach($settings['work_casestudies_tabs'] as $tab) :  ?>
                    <li><a href="#<?php echo $tab['_id']; ?>"><?php echo $tab['tab_item_text']; ?></a></li>
                    <?php endforeach;
                    endif; ?>
                </ul>
                <!-- tab details -->
                <div class="allwork_casestudies-details">
                    <?php if(! empty($settings['work_casestudies_tabs']) && is_array($settings['work_casestudies_tabs'])) : 
                    foreach($settings['work_casestudies_tabs'] as $tab) :  ?>
                    <div id="<?php echo $tab['_id']; ?>" class="tab-details">
                        <ul>
                            <?php if(! empty($tab['work_casestudies_items']) && is_array($tab['work_casestudies_items'])) : 
                            foreach($tab['work_casestudies_items'] as $item) :  ?>

                                <?php $target   = $item['tab_details_item_link']['is_external'] ? 'target="_blank"' : '';
                                $nofollow = $item['tab_details_item_link']['nofollow'] ? 'rel="nofollow"' : '';
                                $url      = $item['tab_details_item_link']['url'] ? $item['tab_details_item_link']['url'] : ''; ?>
                            <li class="text-capitalize"><a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($nofollow).' '. esc_attr($target); ?> ><?php echo $item['tab_details_item']; ?></a></li>
                            <?php endforeach;
                            endif; ?>
                        </ul>
                        <!-- tab item content -->
                        <div class="tab-item_content">
                            <p><?php echo $tab['about_service']; ?></p>
                        </div>
                    </div>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
  
	<?php 
		endif;
	}
    

}