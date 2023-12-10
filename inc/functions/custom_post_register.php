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
    // regsiter post type for service
    if (!post_type_exists('bbs-service')) {
        register_post_type('bbs-service', array(
            'public'        => true,
            'labels'        => array(
                'name'                  => __('BBS Services', 'backbencher'),
                'add_new'               => __('Add Service', 'backbencher'),
                'add_new_item'          => __('Add New Service', 'backbencher'),
                'edit_item'             => __('Edit Service', 'backbencher'),
                'view_item'             => __('View Service', 'backbencher'),
                'new_item'              => __('New Service', 'backbencher'),
                'featured_image'        => __('Service Image', 'backbencher'),
                'set_featured_image'    => __('Set Service Image', 'backbencher'),
                'remove_featured_image' => __('Remove Service Image', 'backbencher'),
            ),
            'menu_icon'     => 'dashicons-controls-volumeon',
            'menu_position' => 20,
            'show_ui'       => true,
            'rewrite'       => array('slug' => 'bbs-service'),
            'has_archive'   => true,
            'query_var'     => true,
            'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'page-attributes'],
            'publicly_queryable' => true,
        ));
    }
   
    // register category for service
    if (!taxonomy_exists('bbsservice_tax')) {
        register_taxonomy('bbsservice_tax', 'bbs-service', array(
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
            'rewrite'           => array('slug' => 'backbencher-category'),   //taxonomy slug
            'query_var'         => true,
            'has_archive'       => false,
            'show_in_rest'      => true,
            'publicly_queryable'=> true,
            'show_admin_column' => true,
        ));
    }
    
    // Register Taxonomy for Tag & for service
    if (!taxonomy_exists('bbservice_tags')) {
        register_taxonomy('bbservice_tags', 'bbs-service', array(
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
            'rewrite'           => array('slug' => 'backbencher-tag'),
            'query_var'         => true,
            'show_admin_column' => true,
        ));
    }
    

    // register post type for career
    if (!post_type_exists('career')) {
        register_post_type('career', array(
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
            'menu_icon'     => 'dashicons-welcome-learn-more',
            'menu_position' => 22,
            'show_ui'       => true,
            'rewrite'       => array('slug' => 'career'),
            'has_archive'   => true,
            'query_var'     => true,
            'supports'      => ['title', 'thumbnail', 'revisions', 'page-attributes'],
            'publicly_queryable' => true,
        ));
    }
    // register category for job types
    if (!taxonomy_exists('career_type')) {
        register_taxonomy('career_type', 'career', array(
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

}



/* ========================
    Custom Meta Box
======================== */
add_action('add_meta_boxes', 'bbs_custom_metaboxes');
function bbs_custom_metaboxes(){
    add_meta_box( 
        'bbbs_service-metabox',     //unique id
        __('Project Details', 'backbencher'),  //title
        'bbs_service_metabox_callback',  //callback function
        'bbs-service',    // post type
        'normal',         // position
        'high'            // high, side
    );
    // metabox for minutes in post
    add_meta_box( 
        'bbbs_minin-post-metabox',     //unique id
        __('Blog Reading Duration', 'backbencher'),  //title
        'bbs_reading_time_metabox_callback',  //callback function
        'post',             // post type
        'normal',           // position
        'high'              // high, side
    );
    // metabox for table of contents
    add_meta_box(
        'bbs_table_ofcontent_metabox',
        'Table of Contents',
        'bbs_table_ofcontent_metabox_callback',
        'post', 
        'normal',
        'high'
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
            <textarea class="regular-text" name="service-projectcontent" id="service-projectcontent" placeholder="Project Content here">
                 <?php echo get_post_meta(get_the_ID(), '_service-projectcontent', true); ?>
            </textarea>
        </p>
        <p>
            <label for="discuss-projectlink"><?php _e('Discuss Project Link', 'backbencher'); ?></label>
            <input type="url" class="regular-text" placeholder="Only url (Full)" name="discuss-projectlink" id="discuss-projectlink" value="<?php echo get_post_meta(get_the_ID(), '_discuss-projectlink', true); ?>" >
        </p>
                
    </div>

<?php
}
// save post
add_action('save_post', 'bbs_metabox_save_post');
function bbs_metabox_save_post($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
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
        update_post_meta( $post_id, '_readingtime', $_POST['readingtime']);
    }

}



/* ========================================
    Custom Meta Box For Table of Contents
======================================== */

// Display metabox content
function bbs_table_ofcontent_metabox_callback($post) {
    // Retrieve the current values of 'tableid'
    $table_ids = get_post_meta($post->ID, '_tableofcontent', true);
    ?>
    <div id="tableid-container">
        <?php
        if (!empty($table_ids)) {
            foreach ($table_ids as $index => $table_id) {
                ?>
                <div class="tableid-input">
                    <label for="tableofcontent_<?php echo $index; ?>">Table of Content Item:</label>
                    <input type="text" class="regular-text" id="tableofcontent_<?php echo $index; ?>" name="tableofcontent[]" value="<?php echo esc_attr($table_id); ?>">
                    <span class="remove-tableid" data-index="<?php echo $index; ?>">X</span>
                </div>
                <?php
            }
        } else {
            // Display at least one empty input field
            ?>
            <div class="tableid-input">
                <label for="tableid_0"><?php _e('Table of Content Item:', 'backbencher'); ?></label>
                <input type="text" class="regular-text" id="tableid_0" name="tableofcontent[]" value="">
            </div>
            <?php
        }
        ?>
    </div>
    <button type="button" class="add-tableof-contentbtn" id="add-tableid"><?php _e('Add Content', 'backbencher'); ?></button>

    <?php
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
            <textarea name="jobwhat-role" id="jobwhat-role" placeholder="About Company "><?php echo get_post_meta(get_the_ID(), '_jobwhat-role', true); ?></textarea>
        </p>

        <!-- for need to be good -->
        <div class="needtobegood">
            <p><?php _e('What do i need to be good at?', 'backbencher'); ?></p>
        </div>
        <?php
        // Retrieve the current values of 'jobneedbegood'
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

                
    </div>

<?php 
}

// Save metabox data
add_action('save_post', 'save_bbs_jobboard_metabox');
function save_bbs_jobboard_metabox($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // address
    if (isset($_POST['_jobaddress'])) {
        $jobaddress = array_map('sanitize_text_field', $_POST['_jobaddress']);
        update_post_meta($post_id, '__jobaddress', $jobaddress);
    }
    // btn link
    if (isset($_POST['jobapply-btnlink'])) {
        $jobapplylink = array_map('sanitize_text_field', $_POST['jobapply-btnlink']);
        update_post_meta($post_id, '_jobapply-btnlink', $jobapplylink);
    }
    // salary range
    if (isset($_POST['jobsalary-range'])) {
        $jobsalary = array_map('sanitize_text_field', $_POST['jobsalary-range']);
        update_post_meta($post_id, '_jobsalary-range', $jobsalary);
    }
    // job deadline
    if (isset($_POST['_jobdeadline'])) {
        $jobdeadline = array_map('sanitize_date', $_POST['_jobdeadline']);
        update_post_meta($post_id, '__jobdeadline', $jobdeadline);
    }
    // about company
    if (isset($_POST['jobabout-company'])) {
        $jobaboutcompany = array_map('sanitize_textarea_field', $_POST['jobabout-company']);
        update_post_meta($post_id, '_jobabout-company', $jobaboutcompany);
    }
    // about role
    if (isset($_POST['jobwhat-role'])) {
        $jobrole = array_map('sanitize_textarea_field', $_POST['jobwhat-role']);
        update_post_meta($post_id, '_jobwhat-role', $jobrole);
    }
    // need to be good
    if (isset($_POST['jobneedbegood'])) {
        $jobneedbegood = array_map('sanitize_text_field', $_POST['jobneedbegood']);
        update_post_meta($post_id, '_jobneedbegood', $jobneedbegood);
    }

}