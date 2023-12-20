<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Backbencher Studio Custom Search Form Details
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 


/* ================================
	for service search with ajax
================================ */
add_action('wp_ajax_bbs_service_ajax_search', 'bbs_service_ajax_search');
add_action('wp_ajax_nopriv_bbs_service_ajax_search', 'bbs_service_ajax_search');

function bbs_service_ajax_search() {
    $search_query      = isset($_POST['bbsservice']) ? $_POST['bbsservice'] : '';
    $selected_category = isset($_POST['bbssearchcat']) ? $_POST['bbssearchcat'] : 'all';

    // argument for input
    $args = array(
        'post_type'      => 'bbs-service',
        'posts_per_page' => -1,
        's'              => $search_query,
    );
    // argument for select options
    if ($selected_category !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'bbsservice_tax',  //taxonomy id
                'field'    => 'slug',
                'terms'    => $selected_category,
            ),
        );
    }
    $category_posts = new WP_Query($args);

    if ($category_posts->have_posts()) : ?>
        <div class="<?php echo esc_attr($search_query); ?> mix blog-details">
            <?php while ($category_posts->have_posts()) : $category_posts->the_post(); ?>
                <!-- single item -->
                <article class="blog-box blog-item">
                    <!-- thumb -->
                    <div class="thumbnail">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <!-- category -->
                    <div class="categories">
                        <?php 
                        $post_categories = get_the_terms(get_the_ID(), 'bbsservice_tax');

                        if (!empty($post_categories)) {
                            $main_category = '';

                            foreach ($post_categories as $post_category) {
                                if ($post_category->parent) {
                                    $category_hierarchy = get_term_parents_list($post_category->term_id, 'bbsservice_tax', array('separator' => ' / ', 'link' => false));
                
                                    $hierarchy_array = explode(' / ', $category_hierarchy);
                                    $main_category   = reset($hierarchy_array);
                                } else {
                                    $main_category = $post_category->name;
                                }
                                // Display only the main category
                                if (!empty($main_category)) {
                                    echo '<h3 class="text-uppercase dot-title">' . $main_category . '</h3>';
                                    // Break out of the loop once the main category is found
                                    break;
                                }
                            }
                        }; ?>
                    </div>
                    <!-- title -->
                    <div class="post-title">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                            <h2 class="text-uppercase"><?php the_title(); ?> </h2>
                        </a>
                    </div>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
        <p><?php _e('<p style="margin-top: 50px;text-align: center;">No service found.</p>', 'backbencher'); ?></p>
    <?php 
    endif;

    die();
}


/* ================================
	for job search with ajax
================================ */
add_action('wp_ajax_bbs_job_ajax_search', 'bbs_job_ajax_search');
add_action('wp_ajax_nopriv_bbs_job_ajax_search', 'bbs_job_ajax_search');

function bbs_job_ajax_search() {
    $job_search_query      = isset($_POST['bbsjobsearch']) ? $_POST['bbsjobsearch'] : '';
    $job_search_selected   = isset($_POST['bbsjobsearchselect']) ? $_POST['bbsjobsearchselect'] : 'all';

    // argument for input
    $args = array(
        'post_type'      => 'career',
        'posts_per_page' => -1,
        's'              => $job_search_query,
    );
    // argument for select options
    if ($job_search_selected !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'career_department',  //taxonomy id
                'field'    => 'slug',
                'terms'    => $job_search_selected,
            ),
        );
    }
    $job_posts = new WP_Query($args);

    if ($job_posts->have_posts()) : ?>
        <ul class="career-items">
            <?php while ($job_posts->have_posts()) : $job_posts->the_post(); ?>
                <!-- single item -->
                <li>
                    <div class="job-title">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    </div>
                    <div class="job-details">
                        <div class="row">
                            <?php $address = get_post_meta(get_the_ID(), '_jobaddress', true);
                            if(!empty($address)) : ?>
                            <!-- location -->
                            <div class="col-lg-3 col-md-6">
                                <div class="location-details">
                                    <div class="location-title">
                                        <p class="text-capitalize"><?php _e('location', 'backbencher'); ?></p>
                                    </div>
                                    <div class="location">
                                        <p><?php echo esc_html($address); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endif; 
                            $salary = get_post_meta(get_the_ID(), '_jobsalary-range', true);
                            if(!empty($salary)) :
                            ?>
                            <!-- salary -->
                            <div class="col-lg-3 col-md-6">
                                <div class="salary-details">
                                    <div class="salary-title">
                                        <p class="text-capitalize"><?php _e('salary', 'backbencher'); ?></p>
                                    </div>
                                    <div class="salary">
                                        <p class="text-capitalize"><?php echo esc_html($salary); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endif; 
                            $deadline = get_post_meta(get_the_ID(), '_jobdeadline', true);
                            if(!empty($deadline)) : ?>
                            <!-- deadline -->
                            <div class="col-lg-3 col-md-6">
                                <div class="deadline-details">
                                    <div class="deadline-title">
                                        <p class="text-capitalize"><?php _e('deadline', 'backbencher'); ?></p>
                                    </div>
                                    <div class="deadline">
                                    <?php
                                        $formatted_deadline = date('d F Y', strtotime($deadline));
                                        echo '<p>' . esc_html($formatted_deadline) . '</p>';
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <!-- contact btn -->
                            <div class="col-lg-3 col-md-6 col-md-text-end">
                                <div class="apply-btn">
                                    <a href="<?php the_permalink(); ?>" class="text-capitalize bbsBtn"><?php _e('apply now', 'backbencher'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    <?php else : ?>
        <p><?php _e('<p style="margin-top: 50px;text-align: center;color: #4C4E57;">No jobs found.</p>', 'backbencher'); ?></p>
    <?php 
    endif;

    die();
}
