<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Theme Custom Post Type
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 



/* ========================
    Custom Post Type
======================== */
add_action('init', 'bbs_custom_post_type');
function bbs_custom_post_type(){
    // regsiter post type for projects //
    if (!post_type_exists('bbs-project')) {
        register_post_type('bbs-project', array(
            'public'        => true,
            'labels'        => array(
                'name'                  => __('BBS Projects', 'backbencher'),
                'add_new'               => __('Add Project', 'backbencher'),
                'add_new_item'          => __('Add New Project', 'backbencher'),
                'edit_item'             => __('Edit Project', 'backbencher'),
                'view_item'             => __('View Project', 'backbencher'),
                'new_item'              => __('New Project', 'backbencher'),
                'featured_image'        => __('Project Image', 'backbencher'),
                'set_featured_image'    => __('Set Project Image', 'backbencher'),
                'remove_featured_image' => __('Remove Project Image', 'backbencher'),
            ),
            'menu_icon'     => 'dashicons-portfolio',
            'menu_position' => 20,
            'show_ui'       => true,
            'rewrite'       => array('slug' => 'bbs-project'),
            'has_archive'   => true,
            'query_var'     => true,
            'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'page-attributes'],
            'publicly_queryable' => true,
        ));
    }
    // register category for project
    if (!taxonomy_exists('bbsproject_tax')) {
        register_taxonomy('bbsproject_tax', 'bbs-project', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Categories', 'backbencher'),
                'add_new'             => __('Add Category','backbencher'),
                'add_new_item'        => __('Add New Category', 'backbencher'),
                'all_items'           => __('All Category', 'backbencher'),
                'edit_item'           => __('Edit Category', 'backbencher'),
                'update_item'         => __('Update Category', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Category', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'project-category'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    // Register Taxonomy for Tag & for project
    if (!taxonomy_exists('bbsproject_tags')) {
        register_taxonomy('bbsproject_tags', 'bbs-project', array(
            'labels'            => array(
                'name'                => __('Tags', 'backbencher'),
                'add_new'             => __('Add Tag', 'backbencher'),
                'add_new_item'        => __('Add New Tag', 'backbencher'),
                'all_items'           => __('All Tags', 'backbencher'),
                'edit_item'           => __('Edit Tags', 'backbencher'),
                'view_item'           => __('View Tag', 'backbencher'),
                'search_items'        => __('Search Tag', 'backbencher'),
                'update_item'         => __('Update Tags', 'backbencher'),
                'not_found'           => __('No Tag Found', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Tag', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'project-tag'),
            'query_var'         => true,
            'show_admin_column' => true,
        ));
    }
    

    // register post type for career //
    if (!post_type_exists('bbs-career')) {
        register_post_type('bbs-career', array(
            'public'        => true,
            'labels'        => array(
                'name'                  => __('BBS Job Board', 'backbencher'),
                'add_new'               => __('Add New Job', 'backbencher'),
                'add_new_item'          => __('Add New Job', 'backbencher'),
                'edit_item'             => __('Edit Job', 'backbencher'),
                'view_item'             => __('View Job', 'backbencher'),
                'new_item'              => __('New Job', 'backbencher'),
                'featured_image'        => __('Job Image', 'backbencher'),
                'set_featured_image'    => __('Set Job Image', 'backbencher'),
                'remove_featured_image' => __('Remove Job Image', 'backbencher'),
            ),
            'menu_icon'     => 'dashicons-megaphone',
            'menu_position' => 24,
            'show_ui'       => true,
            'rewrite'       => array('slug' => 'bbs-career'),
            'has_archive'   => true,
            'query_var'     => true,
            'supports'      => ['title', 'thumbnail', 'revisions', 'page-attributes'],
            'publicly_queryable' => true,
        ));
    }
    // register category for job department
    if (!taxonomy_exists('career_department')) {
        register_taxonomy('career_department', 'bbs-career', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Job Department', 'backbencher'),
                'add_new'             => __('Add Job Department','backbencher'),
                'add_new_item'        => __('Add New Department', 'backbencher'),
                'all_items'           => __('All Department', 'backbencher'),
                'edit_item'           => __('Edit Department', 'backbencher'),
                'update_item'         => __('Update Department', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Department', 'backbencher'),
                'parent_item'         => __('Parent Department', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'career-department'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    // register taxonomy for job types
    if (!taxonomy_exists('career_type')) {
        register_taxonomy('career_type', 'bbs-career', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Job Types', 'backbencher'),
                'add_new'             => __('Add Job Type','backbencher'),
                'add_new_item'        => __('Add New Type', 'backbencher'),
                'all_items'           => __('All Type', 'backbencher'),
                'edit_item'           => __('Edit Type', 'backbencher'),
                'update_item'         => __('Update Type', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Type', 'backbencher'),
                'parent_item'         => __('Parent Type', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'career-type'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    

<<<<<<< HEAD
    // register post type for services //
    if (!post_type_exists('bbs-service')) {
        register_post_type('bbs-service', array(
            'public'        => true,
            'labels'        => array(
                'name'                  => __('BBS Services', 'backbencher'),
                'add_new'               => __('Add New Service', 'backbencher'),
                'add_new_item'          => __('Add New Service', 'backbencher'),
                'edit_item'             => __('Edit Service', 'backbencher'),
                'view_item'             => __('View Service', 'backbencher'),
                'new_item'              => __('New Service', 'backbencher'),
                'featured_image'        => __('Service Image', 'backbencher'),
                'set_featured_image'    => __('Set Service Image', 'backbencher'),
                'remove_featured_image' => __('Remove Service Image', 'backbencher'),
            ),
            'menu_icon'     => 'dashicons-analytics',
            'menu_position' => 22,
            'show_ui'       => true,
            'rewrite'       => array('slug' => 'bbs-service'),
            'has_archive'   => true,
            'query_var'     => true,
            'supports'      => ['title', 'thumbnail', 'editor', 'revisions', 'page-attributes'],
            'publicly_queryable' => true,
        ));
=======
}



/* ========================
    Custom Meta Box
======================== */
add_action('add_meta_boxes', 'bbs_custom_metaboxes');
function bbs_custom_metaboxes(){
    // service metabox
    add_meta_box( 
        'bbbs_service-metabox',     //unique id
        __('Project Details', 'backbencher'),  //title
        'bbs_service_metabox_callback',  //callback function
        'bbs-service',    // post type
        'normal',         // position
        'high'            // high, side
    );
    // service metabox for problem solution
    add_meta_box( 
        'bbs_problemsolution-metabox',     //unique id
        __('Problems & Solutions', 'backbencher'),  //title
        'bbs_problemsolutions_metabox_callback',  //callback function
        'bbs-service',    // post type
        'normal',         // position
        'default', 
    );

    // metabox for minutes in post //
    add_meta_box( 
        'bbbs_minin-post-metabox',     //unique id
        __('Blog Reading Duration', 'backbencher'),  //title
        'bbs_reading_time_metabox_callback',  //callback function
        'post',             // post type
        'normal',           // position
        'high'              // high, side
    );


    /* ========================
    metabox for job board
    ======================== */
    add_meta_box(
        'bbs_job_board_metabox',
        'Job Board Details',
        'bbs_job_board_metabox_callback',
        'career', 
        'normal',
        'high'
    );

}
// callback for service metabox
function bbs_service_metabox_callback(){ ?>
    
    <div class="bbs_service-metabox">
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
    // contact link
    if(isset($_POST['service-contactbtnllink'])){
        update_post_meta( $post_id, '_service-contactbtnllink', $_POST['service-contactbtnllink']);
>>>>>>> c188289d4da0ed3c0fb0acf2056a762e472684f7
    }
    // register category for service
    if (!taxonomy_exists('bbsservice_cat')) {
        register_taxonomy('bbsservice_cat', 'bbs-service', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Categories', 'backbencher'),
                'add_new'             => __('Add Category','backbencher'),
                'add_new_item'        => __('Add New Category', 'backbencher'),
                'all_items'           => __('All Category', 'backbencher'),
                'edit_item'           => __('Edit Category', 'backbencher'),
                'update_item'         => __('Update Category', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Category', 'backbencher'),
                'parent_item'         => __('Parent Category', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'bbsservice-category'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
<<<<<<< HEAD
    // register tag for service
    if (!taxonomy_exists('bbsservice_tags')) {
        register_taxonomy('bbsservice_tags', 'bbs-service', array(
            'hierarchical'      => true,
            'labels'            => array(
                'name'                => __('Tags', 'backbencher'),
                'add_new'             => __('Add Tag','backbencher'),
                'add_new_item'        => __('Add New Tag', 'backbencher'),
                'all_items'           => __('All Tag', 'backbencher'),
                'edit_item'           => __('Edit Tag', 'backbencher'),
                'update_item'         => __('Update Tag', 'backbencher'),
                'add_or_remove_items' => __('Add/Remove Tag', 'backbencher'),
                'parent_item'         => __('Parent Tag', 'backbencher'),
            ),
            'show_ui'           => true,
            'rewrite'           => array('slug' => 'bbsservice-tag'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
=======
    // discuss project link
    if(isset($_POST['discuss-projectlink'])){
        update_post_meta( $post_id, '_discuss-projectlink', $_POST['discuss-projectlink']);
    }

}
 
// callback for service problem solutions
function bbs_problemsolutions_metabox_callback() { ?>
    <div class="bbs_service_problemsolution-metabox">
        <!-- project problems //// -->
        <div class="service-problemitem"><?php _e('Problem Items::', 'backbencher'); ?></div>
        <p class="project-problems">
            <?php
            $service_problem_items = get_post_meta(get_the_ID(), '_service-problemitemtitle', true);
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
>>>>>>> c188289d4da0ed3c0fb0acf2056a762e472684f7
    }
    

}


