<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Theme Custom Metabox
 */


 if(!defined('ABSPATH')){
    exit('not valid');
}; 


/* ========================
    Custom Meta Box
======================== */
add_action('add_meta_boxes', 'bbs_custom_metaboxes');
function bbs_custom_metaboxes(){
    /* ========================
    metabox for projects
    ======================== */
    // project metabox
    add_meta_box( 
        'bbbs_project-metabox',   //metabox unique id
        __('Project Details', 'backbencher'), 
        'bbs_project_metabox_callback',  
        'bbs-project',    
        'normal',         
        'high'           
    );
    // project metabox for problem solution
    add_meta_box( 
        'bbs_problemsolution-metabox',     
        __('Problems & Solutions', 'backbencher'),  
        'bbs_problemsolutions_metabox_callback',  
        'bbs-project',    
        'normal',         
        'default', 
    );
    // project metabox for branding, typography, work process
    add_meta_box( 
        'bbs_brandingtypographyprocess-metabox',     
        __('Branding, Typography & Work Process', 'backbencher'),  
        'bbs_brandingtypographyprocess_metabox_callback',  
        'bbs-project',    
        'normal',         
        'default', 
    );

    /* ========================
    metabox for default post 
    ======================== */
    // metabox for minutes in post 
    add_meta_box( 
        'bbbs_minin-post-metabox',    
        __('Blog Reading Duration', 'backbencher'), 
        'bbs_reading_time_metabox_callback',  
        'post',             
        'normal',           
        'high'             
    );

    // metabox for banner image
    add_meta_box( 
        'bbbs-post-bannerimg-metabox',    
        __('Post Banner Image', 'backbencher'), 
        'bbs_post_bannerimg_metabox_callback',  
        'post',             
        'normal',           
        'high',           
    );


    /* ========================
    metabox for job board
    ======================== */
    add_meta_box(
        'bbs_job_board_metabox',
        'Job Board Details',
        'bbs_job_board_metabox_callback',
        'bbs-career', 
        'normal',
        'high'
    );

}

// callback for project metabox
function bbs_project_metabox_callback(){ ?>
    
    <div class="bbs_service-metabox">
        <!-- banner image -->
        <p>
            <div class="service_banner-img">
                <?php wp_nonce_field(basename(__FILE__), 'bbbs_project-metabox_nonce');  //bbbs_project-metabox is metabox unique id ?>
                <?php $serimgurl = get_post_meta(get_the_ID(), '_service_banner-image', true); ?>

                <label for="service_banner-image"><?php _e('Project Banner Image', 'backbencher'); ?></label>
                <p><?php _e('Upload a big image (1609x760)', 'backbencher'); ?></p>
                <input type="hidden" id="service_banner-image" name="service_banner-image" value="<?php echo esc_attr($serimgurl); ?>">
                <img src="<?php echo esc_url($serimgurl); ?>" alt="banner image" id="servicebannerimagetag">
                <div class="add_remove-btn">
                    <button class="add-image"><?php _e('Add Image', 'backbencher'); ?></button>
                    <button class="remove-image"><?php _e('Remove Image', 'backbencher'); ?></button>
                </div>
            </div>
        </p>
        <!-- contact button link -->
        <p>
            <label for="service-contactbtnllink"><?php _e('Contact Button Link', 'backbencher'); ?></label>
            <input type="url" class="regular-text" placeholder="Only url (Full)" name="service-contactbtnllink" id="service-contactbtnllink" value="<?php echo get_post_meta(get_the_ID(), '_service-contactbtnllink', true); ?>" >
        </p>
        <p>
            <label for="service-projectcontent"><?php _e('About Project Content', 'backbencher'); ?></label>
            <textarea class="regular-text" name="service-projectcontent" id="service-projectcontent" placeholder="Project Content here"><?php echo get_post_meta(get_the_ID(), '_service-projectcontent', true); ?></textarea>
        </p>
        <p>
            <label for="discuss-projectlink"><?php _e('Discuss Project Link', 'backbencher'); ?></label>
            <input type="url" class="regular-text" placeholder="Only url (Full)" name="discuss-projectlink" id="discuss-projectlink" value="<?php echo get_post_meta(get_the_ID(), '_discuss-projectlink', true); ?>" >
        </p>
                
    </div>

<?php
}
// save post
add_action('save_post', 'bbs_projectdetails_metabox_save_post');
function bbs_projectdetails_metabox_save_post($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // for banner image //
    // Check if nonce is set.
    if (!isset($_POST['bbbs_project-metabox_nonce'])){ return; }
    // Verify that the nonce is valid.
    if (!wp_verify_nonce($_POST['bbbs_project-metabox_nonce'], basename(__FILE__))){
        return;
    }
    // Handle image upload.
    if (!empty($_POST['service_banner-image'])){
        $serimage_url = esc_url($_POST['service_banner-image']);
        update_post_meta($post_id, '_service_banner-image', $serimage_url);
    }

    // contact link
    if(isset($_POST['service-contactbtnllink'])){
        update_post_meta( $post_id, '_service-contactbtnllink', $_POST['service-contactbtnllink']);
    }
    // project content
    if(isset($_POST['service-projectcontent'])){
        update_post_meta( $post_id, '_service-projectcontent', $_POST['service-projectcontent']);
    }
    // discuss project link
    if(isset($_POST['discuss-projectlink'])){
        update_post_meta( $post_id, '_discuss-projectlink', $_POST['discuss-projectlink']);
    }

}
 
// callback for project problem solutions
function bbs_problemsolutions_metabox_callback() { ?>
    <div class="bbs_service_problemsolution-metabox">
        <!-- project problems //// -->
        <div class="service-problemitem"><?php _e('Problem Items::', 'backbencher'); ?></div>
        <p class="project-problems">
            <?php
            $service_problem_items    = get_post_meta(get_the_ID(), '_service-problemitemtitle', true);
            $service_problem_contents = get_post_meta(get_the_ID(), '_problemitem-content', true);
            ?>
            <div id="serviceproblem-container">
                <?php
                if (!empty($service_problem_items)) {
                    foreach ($service_problem_items as $index => $service_problem_item) {
                        ?>
                        <div class="serviceproblemid">
                            <label for="service-problemitemtitle_<?php echo $index; ?>"><?php _e('Problem item:', 'backbencher'); ?></label>
                            <input type="text" class="regular-text" placeholder="Problem item title" id="service-problemitemtitle_<?php echo $index; ?>" name="service-problemitemtitle[]" value="<?php echo esc_attr($service_problem_item); ?>">
                            <span class="remove-problemitems remove-icon" data-index="<?php echo $index; ?>">X</span>
                            <textarea name="problemitem-content[]" id="problemitem-content_<?php echo $index; ?>" placeholder="Problem content"><?php echo esc_textarea($service_problem_contents[$index]); ?></textarea>
                        </div>
                        <?php
                    }
                } else {
                    // Display at least one empty input field
                    ?>
                    <div class="serviceproblemid">
                        <label for="service-problemitemtitle_0"><?php _e('Problem item:', 'backbencher'); ?></label>
                        <input type="text" class="regular-text" placeholder="Problem item title" id="service-problemitemtitle_0" name="service-problemitemtitle[]" value="">
                        <textarea name="problemitem-content[]" id="problemitem-content_0" placeholder="Problem content"></textarea>
                    </div>
                    <?php
                }
                ?>
            </div>
            <button type="button" class="add-problem" id="add-problem"><?php _e('Add problem', 'backbencher'); ?></button>
        </p>
        <!-- project solutions //// -->
        <div class="service-solutionitem"><?php _e('Solution Items::', 'backbencher'); ?></div>
        <p class="project-solutions">
            <?php
            $service_solution_items = get_post_meta(get_the_ID(), '_service-solutionitemtitle', true);
            $service_solution_contents = get_post_meta(get_the_ID(), '_solutionitem-content', true);
            ?>
            <div id="servicesolution-container">
                <?php
                if (!empty($service_solution_items)) {
                    foreach ($service_solution_items as $index => $service_solution_item) {
                        ?>
                        <div class="servicesolutionid">
                            <label for="service-solutionitemtitle_<?php echo $index; ?>"><?php _e('Solution item:', 'backbencher'); ?></label>
                            <input type="text" class="regular-text" placeholder="Solution item title" id="service-solutionitemtitle_<?php echo $index; ?>" name="service-solutionitemtitle[]" value="<?php echo esc_attr($service_solution_item); ?>">
                            <span class="remove-solutionitems remove-icon" data-index="<?php echo $index; ?>">X</span>
                            <textarea name="solutionitem-content[]" id="solutionitem-content_<?php echo $index; ?>" placeholder="Solution content"><?php echo esc_textarea($service_solution_contents[$index]); ?></textarea>
                        </div>
                        <?php
                    }
                } else {
                    // Display at least one empty input field
                    ?>
                    <div class="servicesolutionid">
                        <label for="service-solutionitemtitle_0"><?php _e('Solution item:', 'backbencher'); ?></label>
                        <input type="text" class="regular-text" placeholder="Solution item title" id="service-solutionitemtitle_0" name="service-solutionitemtitle[]" value="">
                        <textarea name="solutionitem-content[]" id="solutionitem-content_0" placeholder="Solution content"></textarea>
                    </div>
                    <?php
                }
                ?>
            </div>
            <button type="button" class="add-solution" id="add-solution"><?php _e('Add solution', 'backbencher'); ?></button>
        </p>
        <!-- problem, solution image -->
        <p>
            <div class="problem_solution-img">
                <?php wp_nonce_field(basename(__FILE__), 'bbs_problemsolution-metabox_nonce'); ?>
                <?php $imgurl = get_post_meta(get_the_ID(), '_problemsolution-image', true); ?>

                <label for="problemsolution-image"><?php _e('Problem Solution Image', 'backbencher'); ?></label>
                <p><?php _e('Upload a big image (1937x1050)', 'backbencher'); ?></p>
                <input type="hidden" id="problemsolution-image" name="problemsolution-image" value="<?php echo esc_attr($imgurl); ?>">
                <img src="<?php echo esc_url($imgurl); ?>" alt="problem solution image" id="problemsolutionimagetag">
                <div class="add_remove-btn">
                    <button class="add-image"><?php _e('Add Image', 'backbencher'); ?></button>
                    <button class="remove-image"><?php _e('Remove Image', 'backbencher'); ?></button>
                </div>
            </div>
        </p>

    </div>
<?php
}
// Save post
add_action('save_post', 'bbs_problemsolution_metabox_save_post');
function bbs_problemsolution_metabox_save_post($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Problem titles
    if (isset($_POST['service-problemitemtitle'])) {
        $problem_titles = array_map('sanitize_text_field', $_POST['service-problemitemtitle']);
        update_post_meta($post_id, '_service-problemitemtitle', $problem_titles);
    }

    // Problem contents
    if (isset($_POST['problemitem-content'])) {
        $problem_contents = array_map('sanitize_textarea_field', $_POST['problemitem-content']);
        update_post_meta($post_id, '_problemitem-content', $problem_contents);
    }

    // Solution titles
    if (isset($_POST['service-solutionitemtitle'])) {
        $solution_titles = array_map('sanitize_text_field', $_POST['service-solutionitemtitle']);
        update_post_meta($post_id, '_service-solutionitemtitle', $solution_titles);
    }

    // Solution contents
    if (isset($_POST['solutionitem-content'])) {
        $problem_contents = array_map('sanitize_textarea_field', $_POST['solutionitem-content']);
        update_post_meta($post_id, '_solutionitem-content', $problem_contents);
    }

    // for problem solutuion image //
    // Check if nonce is set.
    if (!isset($_POST['bbs_problemsolution-metabox_nonce'])){ return; }
    // Verify that the nonce is valid.
    if (!wp_verify_nonce($_POST['bbs_problemsolution-metabox_nonce'], basename(__FILE__))){
        return;
    }
    // Handle image upload.
    if (!empty($_POST['problemsolution-image'])){
        $image_url = esc_url($_POST['problemsolution-image']);
        update_post_meta($post_id, '_problemsolution-image', $image_url);
    }

}

// callback for branding, typography, work process
function bbs_brandingtypographyprocess_metabox_callback(){ ?>
    <div class="branding_typography_workprocess">
        <!-- branding content -->
        <div class="branding-content">
            <p>
                <label for="service-brandingcontent"><?php _e('Branding Content', 'backbencher'); ?></label>
                <textarea class="regular-text" placeholder="Branding content is here" name="service-brandingcontent" id="service-brandingcontent"><?php echo get_post_meta(get_the_ID(), '_service-brandingcontent', true); ?></textarea>
            </p>
        </div>
        <!-- branding image -->
        <p>
            <div class="branding-image">
                <?php wp_nonce_field(basename(__FILE__), 'bbs_brandingtypographyprocess-metabox_nonce'); ?>
                <?php $brandimgurl = get_post_meta(get_the_ID(), '_branding-image', true); ?>

                <label for="branding-image"><?php _e('Branding Image', 'backbencher'); ?></label>
                <p><?php _e('Upload a big image like (1608x1194)', 'backbencher'); ?></p>
                <input type="hidden" id="branding-image" name="branding-image" value="<?php echo esc_attr($brandimgurl); ?>">
                <img src="<?php echo esc_url($brandimgurl); ?>" alt="Branding image" id="brandingimagetag">
                <div class="add_remove-btn">
                    <button class="add-image"><?php _e('Add Image', 'backbencher'); ?></button>
                    <button class="remove-image"><?php _e('Remove Image', 'backbencher'); ?></button>
                </div>
            </div>
        </p>

        <!-- Typography content -->
        <div class="typography-content">
            <p>
                <label for="service-typographycontent"><?php _e('Typography Content', 'backbencher'); ?></label>
                <textarea class="regular-text" placeholder="Typography content is here" name="service-typographycontent" id="service-typographycontent"><?php echo get_post_meta(get_the_ID(), '_service-typographycontent', true); ?></textarea>
            </p>
        </div>
        <!-- typography image -->
        <p>
            <div class="typography-image">
                <?php wp_nonce_field(basename(__FILE__), 'bbs_brandingtypographyprocess-metabox_nonce'); ?>
                <?php $typoimgurl = get_post_meta(get_the_ID(), '_typography-image', true); ?>

                <label for="typography-image"><?php _e('Typography Image', 'backbencher'); ?></label>
                <p><?php _e('Upload a big image like (1608x1194)', 'backbencher'); ?></p>
                <input type="hidden" id="typography-image" name="typography-image" value="<?php echo esc_attr($typoimgurl); ?>">
                <img src="<?php echo esc_url($typoimgurl); ?>" alt="Typography image" id="typographyimagetag">
                <div class="add_remove-btn typography-add_removebtns">
                    <button class="add-image"><?php _e('Add Image', 'backbencher'); ?></button>
                    <button class="remove-image"><?php _e('Remove Image', 'backbencher'); ?></button>
                </div>
            </div>
        </p>

        <!-- Work Process content -->
        <div class="workprocess-content">
            <p>
                <label for="service-workprocesscontent"><?php _e('Work process Content', 'backbencher'); ?></label>
                <textarea class="regular-text" placeholder="Work process content is here" name="service-workprocesscontent" id="service-workprocesscontent"><?php echo get_post_meta(get_the_ID(), '_service-workprocesscontent', true); ?></textarea>
            </p>
        </div>
        <!-- Work Process image -->
        <p>
            <div class="workprocess-image">
                <?php wp_nonce_field(basename(__FILE__), 'bbs_brandingworkprocessprocess-metabox_nonce'); ?>
                <?php $workimgurl = get_post_meta(get_the_ID(), '_workprocess-image', true); ?>

                <label for="workprocess-image"><?php _e('Work Process Image', 'backbencher'); ?></label>
                <input type="hidden" id="workprocess-image" name="workprocess-image" value="<?php echo esc_attr($workimgurl); ?>">
                <img src="<?php echo esc_url($workimgurl); ?>" alt="Work Process image" id="workprocessimagetag">
                <div class="add_remove-btn">
                    <button class="add-image"><?php _e('Add Image', 'backbencher'); ?></button>
                    <button class="remove-image"><?php _e('Remove Image', 'backbencher'); ?></button>
                </div>
            </div>
        </p>
    </div>
<?php 
}
// save post
add_action('save_post', 'bbs_brandingtypographyprocess_metabox_save_post');
function bbs_brandingtypographyprocess_metabox_save_post($post_id){
    // branding content 
    if (isset($_POST['service-brandingcontent'])){
        $brandcontent = sanitize_textarea_field($_POST['service-brandingcontent']);
        update_post_meta($post_id, '_service-brandingcontent', $brandcontent);
    }
    // for branding image //
    // Check if nonce is set.
    if (!isset($_POST['bbs_brandingtypographyprocess-metabox_nonce'])){ return; }
    // Verify that the nonce is valid.
    if (!wp_verify_nonce($_POST['bbs_brandingtypographyprocess-metabox_nonce'], basename(__FILE__))){
        return;
    }
    // Handle image upload.
    if (!empty($_POST['branding-image'])){
        $brandimage_url = esc_url($_POST['branding-image']);
        update_post_meta($post_id, '_branding-image', $brandimage_url);
    }
    
    // typography content
    if (isset($_POST['service-typographycontent'])){
        $typocontent = sanitize_textarea_field($_POST['service-typographycontent']);
        update_post_meta($post_id, '_service-typographycontent', $typocontent);
    }
    // for typography image //
    // Check if nonce is set.
    if (!isset($_POST['bbs_brandingtypographyprocess-metabox_nonce'])){ return; }
    // Verify that the nonce is valid.
    if (!wp_verify_nonce($_POST['bbs_brandingtypographyprocess-metabox_nonce'], basename(__FILE__))){
        return;
    }
    // Handle image upload.
    if (!empty($_POST['typography-image'])){
        $typoimage_url = esc_url($_POST['typography-image']);
        update_post_meta($post_id, '_typography-image', $typoimage_url);
    }
    
    // work process content
    if (isset($_POST['service-workprocesscontent'])){
        $workcontent = sanitize_textarea_field($_POST['service-workprocesscontent']);
        update_post_meta($post_id, '_service-workprocesscontent', $workcontent);
    }
    // for work process image //
    // Check if nonce is set.
    if (!isset($_POST['bbs_brandingtypographyprocess-metabox_nonce'])){ return; }
    // Verify that the nonce is valid.
    if (!wp_verify_nonce($_POST['bbs_brandingtypographyprocess-metabox_nonce'], basename(__FILE__))){
        return;
    }
    // Handle image upload.
    if (!empty($_POST['workprocess-image'])){
        $workimage_url = esc_url($_POST['workprocess-image']);
        update_post_meta($post_id, '_workprocess-image', $workimage_url);
    }

}
 

// callback for reading time metabox
function bbs_reading_time_metabox_callback(){ ?>
    
    <div class="bbs_readingtime-metabox">
        <p>
            <label for="readingtime"><?php _e('Total Time', 'backbencher'); ?></label>
            <input type="text" class="regular-text" placeholder="3 Min" name="readingtime" id="readingtime" value="<?php echo get_post_meta(get_the_ID(), '_readingtime', true); ?>" >
        </p>
                
    </div>

<?php
}
// save post for reading time
add_action('save_post', 'bbs_readingtime_metabox_save_post');
function bbs_readingtime_metabox_save_post($post_id){
    // for title
    if(isset($_POST['readingtime'])){
        $readingtime = sanitize_text_field($_POST['readingtime']);
        update_post_meta( $post_id, '_readingtime', $readingtime);
    }

}


// callback for post banner image
function bbs_post_bannerimg_metabox_callback(){ ?>

    <!-- banner image -->
    <p>
        <div class="default_post_banner-img">
            <?php wp_nonce_field(basename(__FILE__), 'bbbs-post-bannerimg-metabox_nonce');  //bbbs-post-bannerimg-metabox is metabox unique id ?>
            <?php $projectimgurl = get_post_meta(get_the_ID(), '_defaultpost_banner-image', true); ?>

            <label for="defaultpost_banner-image"><?php _e('Post Banner Image', 'backbencher'); ?></label>
            <p><?php _e('Upload a big image (1609x760)', 'backbencher'); ?></p>
            <input type="hidden" id="defaultpost_banner-image" name="defaultpost_banner-image" value="<?php echo esc_attr($projectimgurl); ?>">
            <img src="<?php echo esc_url($projectimgurl); ?>" alt="post-banner-image" id="defaultpostbannerimagetag">
            <div class="add_remove-btn">
                <button class="add-image"><?php _e('Add Image', 'backbencher'); ?></button>
                <button class="remove-image"><?php _e('Remove Image', 'backbencher'); ?></button>
            </div>
        </div>
    </p>

<?php 
}
// save post for reading time
add_action('save_post', 'bbs_post_bannerimage_metabox_save_post');
function bbs_post_bannerimage_metabox_save_post($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // for banner image //
    // Check if nonce is set.
    if (!isset($_POST['bbbs-post-bannerimg-metabox_nonce'])){ return; }
    // Verify that the nonce is valid.
    if (!wp_verify_nonce($_POST['bbbs-post-bannerimg-metabox_nonce'], basename(__FILE__))){
        return;
    }
    // Handle image upload.
    if (!empty($_POST['defaultpost_banner-image'])){
        $projectimage_url = esc_url($_POST['defaultpost_banner-image']);
        update_post_meta($post_id, '_defaultpost_banner-image', $projectimage_url);
    }

}


// Save metabox data
add_action('save_post', 'save_tableof_content_metabox');
function save_tableof_content_metabox($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['tableofcontent'])) {
        $table_ids = array_map('sanitize_text_field', $_POST['tableofcontent']);
        update_post_meta($post_id, '_tableofcontent', $table_ids);
    }
}


/* ========================================
    Meta Box for Job Board
======================================== */
function bbs_job_board_metabox_callback(){ ?>

    <div class="bbs_jobboard_metabox_details">
        <p>
            <label for="jobaddress"><?php _e('Office Location', 'backbencher'); ?></label>
            <input type="text" class="regular-text" placeholder="Location is here" name="jobaddress" id="jobaddress" value="<?php echo get_post_meta(get_the_ID(), '_jobaddress', true); ?>" >
        </p>
        <p>
            <label for="jobapply-btnlink"><?php _e('Job Apply Button Link', 'backbencher'); ?></label>
            <input type="url" class="regular-text" placeholder="Full url here" name="jobapply-btnlink" id="jobapply-btnlink" value="<?php echo get_post_meta(get_the_ID(), '_jobapply-btnlink', true); ?>" >
        </p>
        <p>
            <label for="jobsalary-range"><?php _e('Job Salary Range', 'backbencher'); ?></label>
            <input type="text" class="regular-text" placeholder="18,500 - 25,500" name="jobsalary-range" id="jobsalary-range" value="<?php echo get_post_meta(get_the_ID(), '_jobsalary-range', true); ?>" >
        </p>
        <p>
            <label for="jobdeadline"><?php _e('Job Deadline', 'backbencher'); ?></label>
            <input type="date" class="regular-text" placeholder="24 October 2024" name="jobdeadline" id="jobdeadline" value="<?php echo get_post_meta(get_the_ID(), '_jobdeadline', true); ?>" >
        </p>
        <p>
            <label for="jobabout-company"><?php _e('Something About Company', 'backbencher'); ?></label>
            <textarea name="jobabout-company" id="jobabout-company" placeholder="About Company "><?php echo get_post_meta(get_the_ID(), '_jobabout-company', true); ?></textarea>
        </p>
        <p>
            <label for="jobwhat-role"><?php _e('What is the role?', 'backbencher'); ?></label>
            <textarea name="jobwhat-role" id="jobwhat-role" placeholder="What's the role"><?php echo get_post_meta(get_the_ID(), '_jobwhat-role', true); ?></textarea>
        </p>

        <!-- for need to be good -->
        <div class="needtobegood">
            <p><?php _e('What do i need to be good at?', 'backbencher'); ?></p>
        </div>
        <?php
        $job_needbegood_values = get_post_meta(get_the_ID(), '_jobneedbegood', true); ?>
        <div id="needbegood-container">
            <?php
            if (!empty($job_needbegood_values)) {
                foreach ($job_needbegood_values as $index => $job_needbegood_value) {
                    ?>
                    <div class="needbegoodid">
                        <label for="jobneedbegood_<?php echo $index; ?>"><?php _e('Good at item:', 'backbencher'); ?></label>
                        <input type="text" class="regular-text" placeholder="Add item here" id="jobneedbegood_<?php echo $index; ?>" name="jobneedbegood[]" value="<?php echo esc_attr($job_needbegood_value); ?>">
                        <span class="remove-needbegood" data-index="<?php echo $index; ?>">X</span>
                    </div>
                    <?php
                }
            } else {
                // Display at least one empty input field
                ?>
                <div class="needbegoodid">
                    <label for="jobneedbegood_0"><?php _e('Good at item:', 'backbencher'); ?></label>
                    <input type="text" class="regular-text" placeholder="Add item here" id="jobneedbegood_0" name="jobneedbegood[]" value="">
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="add-needbegoodbtn" id="add-needbegood"><?php _e('Add item', 'backbencher'); ?></button>

        <!-- for skills -->
        <div class="job-allskills">
            <p><?php _e('What skills?', 'backbencher'); ?></p>
        </div>
        <?php
        $job_needbegood_values = get_post_meta(get_the_ID(), '_jobskill', true); ?>
        <div id="skill-container">
            <?php
            if (!empty($job_needbegood_values)) {
                foreach ($job_needbegood_values as $index => $job_needbegood_value) {
                    ?>
                    <div class="jobskillid">
                        <label for="jobskill_<?php echo $index; ?>"><?php _e('Skill Item:', 'backbencher'); ?></label>
                        <input type="text" class="regular-text" placeholder="Add skill here" id="jobskill_<?php echo $index; ?>" name="jobskill[]" value="<?php echo esc_attr($job_needbegood_value); ?>">
                        <span class="remove-skill" data-index="<?php echo $index; ?>">X</span>
                    </div>
                    <?php
                }
            } else {
                // Display at least one empty input field
                ?>
                <div class="jobskillid">
                    <label for="jobskill_0"><?php _e('Skill Item:', 'backbencher'); ?></label>
                    <input type="text" class="regular-text" placeholder="Add skill here" id="jobskill_0" name="jobskill[]" value="">
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="add-jobskillbtn" id="add-jobskill"><?php _e('Add skill', 'backbencher'); ?></button>

        <!-- for benefit -->
        <div class="job-benefit">
            <p><?php _e('Benefit, Perks, Bonuses!', 'backbencher'); ?></p>
        </div>
        <?php
        $job_needbegood_values = get_post_meta(get_the_ID(), '_jobbenefit', true); ?>
        <div id="benefit-container">
            <?php
            if (!empty($job_needbegood_values)) {
                foreach ($job_needbegood_values as $index => $job_needbegood_value) {
                    ?>
                    <div class="jobbenefitid">
                        <label for="jobbenefit_<?php echo $index; ?>"><?php _e('Benefit Item:', 'backbencher'); ?></label>
                        <input type="text" class="regular-text" placeholder="Add benefit here" id="jobbenefit_<?php echo $index; ?>" name="jobbenefit[]" value="<?php echo esc_attr($job_needbegood_value); ?>">
                        <span class="remove-benefit" data-index="<?php echo $index; ?>">X</span>
                    </div>
                    <?php
                }
            } else {
                // Display at least one empty input field
                ?>
                <div class="jobbenefitid">
                    <label for="jobbenefit_0"><?php _e('Benefit Item:', 'backbencher'); ?></label>
                    <input type="text" class="regular-text" placeholder="Add benefit here" id="jobbenefit_0" name="jobbenefit[]" value="">
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="add-jobbenefitbtn" id="add-jobbenefit"><?php _e('Add benefit', 'backbencher'); ?></button>

                
    </div>

<?php 
}

// Save metabox data
add_action('save_post', 'save_bbs_jobboard_metabox');
function save_bbs_jobboard_metabox($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // address
    if (isset($_POST['jobaddress'])) {
        $jobaddress = sanitize_text_field($_POST['jobaddress']);
        update_post_meta($post_id, '_jobaddress', $jobaddress);
    }

    // btn link
    if (isset($_POST['jobapply-btnlink'])) {
        $jobapplylink = esc_url_raw($_POST['jobapply-btnlink']);
        update_post_meta($post_id, '_jobapply-btnlink', $jobapplylink);
    }

    // salary range
    if (isset($_POST['jobsalary-range'])) {
        $jobsalary = sanitize_text_field($_POST['jobsalary-range']);
        update_post_meta($post_id, '_jobsalary-range', $jobsalary);
    }
    
    // job deadline
    if (isset($_POST['jobdeadline'])) {
        $jobdeadline = sanitize_text_field($_POST['jobdeadline']);
        update_post_meta($post_id, '_jobdeadline', $jobdeadline);
    }

    // job about company
    if (isset($_POST['jobabout-company'])) {
        $jobaboutcompany = wp_kses($_POST['jobabout-company'], wp_kses_allowed_html('post'));
        update_post_meta($post_id, '_jobabout-company', $jobaboutcompany);
    }    

    // about role
    if (isset($_POST['jobwhat-role'])) {
        $jobrole = wp_kses($_POST['jobwhat-role'], wp_kses_allowed_html('post'));
        update_post_meta($post_id, '_jobwhat-role', $jobrole);
    }

    // need to be good
    if (isset($_POST['jobneedbegood'])) {
        $jobneedbegood = array_map('sanitize_text_field', $_POST['jobneedbegood']);
        update_post_meta($post_id, '_jobneedbegood', $jobneedbegood);
    }

    // skill
    if (isset($_POST['jobskill'])) {
        $jobskill = array_map('sanitize_text_field', $_POST['jobskill']);
        update_post_meta($post_id, '_jobskill', $jobskill);
    }

    // benefit
    if (isset($_POST['jobbenefit'])) {
        $jobbenefit = array_map('sanitize_text_field', $_POST['jobbenefit']);
        update_post_meta($post_id, '_jobbenefit', $jobbenefit);
    }


}



/* ============================================================
Custom Metabox Contents Show in Dashboard
============================================================ */
add_filter( 'manage_bbs-career_posts_columns', 'bbs_set_custom_edit_bbs_career_columns' );    //bbs-career is post type id
add_action( 'manage_bbs-career_posts_custom_column' , 'bbs_custom_bbs_career_column_dashboard' );     
 
function bbs_set_custom_edit_bbs_career_columns($columns){
    $columns['jobsalary-range']  = __( 'Salary Range', 'backbencher' );
    $columns['jobdeadline']      = __( 'Deadline', 'backbencher' );
 
    return $columns;
};
 
function bbs_custom_bbs_career_column_dashboard( $column ) {
    switch ( $column ) {
        case 'jobsalary-range' :
            echo get_post_meta( get_the_ID(), '_jobsalary-range' , true ); 
            break;

        case 'jobdeadline' :
            echo get_post_meta( get_the_ID(), '_jobdeadline' , true ); 
            break;
    }
};

/// Again this hook Only for Date Show later /////
add_filter( 'manage_bbs-career_posts_columns', 'bbs_career_columns_list_date' );  
function bbs_career_columns_list_date($columns) {
    unset( $columns['date']   );
    // date
    $columns['date']           = __('Published Date', 'backbencher');
 
    return $columns;
};



