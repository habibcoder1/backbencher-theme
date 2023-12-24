<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Project Single Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}  ?>

<?php 
if(have_posts()) :
    while(have_posts()) : the_post() ; ?>

    <!-- =========================
    Single Service Details Start
    ========================== -->
    <section class="single_service-page">
        <div class="container">
        <?php 
            $bannerimg = get_post_meta(get_the_ID(), '_service_banner-image', true);
            if (!empty($bannerimg)) : ?>
                <!-- thumb -->
                <div class="service-img">
                    <img src="<?php echo $bannerimg; ?>" alt="backbencher-banner-image">
                </div>
            <?php  
            endif; ?>
            <div class="titlecontent_btn">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="post-title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-btn">
                            <a class="bbsBtn" href="<?php echo get_post_meta(get_the_ID(), '_service-contactbtnllink', true); ?>"><?php _e('contact us', 'backbencher'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hr -->
            <hr>
            <!-- project details -->
            <div class="project-details">
                <div class="row">
                    <!-- project title -->
                    <div class="col-lg-3">
                        <div class="project-title">
                            <h2 class="text-uppercase"><?php _e('project', 'backbencher'); ?></h2>
                        </div>
                    </div>
                    <!-- project content -->
                    <div class="col-lg-9">
                        <div class="project-content">
                            <p><?php echo get_post_meta(get_the_ID(), '_service-projectcontent', true); ?></p>
                        </div>
                        <div class="project-peoples_link">
                            <!-- images -->
                            <div class="people-image">
                                <?php
                                    $users = get_users();
                                    foreach ($users as $user){
                                        echo get_avatar($user->ID, 21); 
                                    } 
                                ?>
                            </div>
                            <div class="project-link">
                                <a href="<?php echo get_post_meta(get_the_ID(), '_discuss-projectlink', true); ?>"><?php _e('Discuss the project', 'backbencher'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hr -->
            <hr>
            <!-- related posts -->
        </div>
    </section>
    <!-- =========================
    Single Service Details End
    ========================== -->
    <!-- =========================
    Problem Solution Area Start
    ========================== -->
    <section class="problem_solution-area">
        <div class="container">
            <?php
            $service_problem_items    = get_post_meta(get_the_ID(), '_service-problemitemtitle', true);
            $service_problem_contents = get_post_meta(get_the_ID(), '_problemitem-content', true);  

            $has_non_empty_item = false;
            foreach ($service_problem_items as $item) {
                if (!empty($item)) {
                    $has_non_empty_item = true;
                    break;
                }
            }

            if ($has_non_empty_item) : ?>
                <!-- problem area -->
                <div class="problems-area">
                    <div class="row">
                        <div class="col-lg-3"> 
                            <div class="problem-title">
                                <h2 class="text-uppercase"><?php _e('problems', 'backbencher'); ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <ul class="problem-items">
                                <?php
                                // Iterate through each problem item and content
                                foreach ($service_problem_items as $index => $item) :
                                    $content = !empty($service_problem_contents[$index]) ? $service_problem_contents[$index] : ''; ?>
                                    <li>
                                        <h4 class="problem_item-title"><?php echo esc_html($item); ?></h4>
                                        <p><?php echo esc_html($content); ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            endif; ?>   
            <?php
            $service_solution_items    = get_post_meta(get_the_ID(), '_service-solutionitemtitle', true);
            $service_solution_contents = get_post_meta(get_the_ID(), '_solutionitem-content', true);

            $has_non_empty_solutionitem = false;
            foreach ($service_solution_items as $item) {
                if (!empty($item)) {
                    $has_non_empty_solutionitem = true;
                    break;
                }
            }

            if($has_non_empty_solutionitem) :  ?>         
                <!-- solution area -->
                <hr>
                <div class="solutions-area">
                    <div class="row">
                        <div class="col-lg-3"> 
                            <div class="solution-title">
                                <h2 class="text-uppercase"><?php _e('solutions', 'backbencher'); ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <ul class="solution-items">
                                <?php 
                                foreach ($service_solution_items as $index => $sitem) :
                                $scontent = !empty($service_solution_contents[$index]) ? $service_solution_contents[$index] : ''; ?>
                                <li>
                                    <h4 class="solution_item-title"><?php echo esc_html($sitem); ?></h4>
                                    <p><?php echo esc_html($scontent); ?></p>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php $problemsolu_img = get_post_meta(get_the_ID(), '_problemsolution-image', true);
    if(!empty($problemsolu_img)) : ?>
    <section class="problem_solution_image-area">
        <div class="problem_solution-image">
            <img src="<?php echo $problemsolu_img; ?>" alt="problem solution image">
        </div>
    </section>
    <?php endif; ?>
    <!-- =========================
    Problem Solution Area End
    ========================== -->
    <?php $brandingcontent = get_post_meta(get_the_ID(), '_service-brandingcontent', true); 
          $typocontent     = get_post_meta(get_the_ID(), '_service-typographycontent', true); 
          $workcontent     = get_post_meta(get_the_ID(), '_service-workprocesscontent', true);
    if(!empty($brandingcontent) || !empty($typocontent) || !empty($workcontent) ) : ?>
    <!-- =========================
    Branding Area Start
    ========================== -->
    <div class="bbs-spacer"></div>
    <?php endif;
    if(!empty($brandingcontent)) : ?>
    <section class="singleservice_branding-area">
        <div class="container">
            <div class="row title-content">
                <div class="col-lg-3"> 
                    <div class="branding-title">
                        <h2 class="text-uppercase"><?php _e('branding', 'backbencher'); ?></h2>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="branding-content">
                        <p><?php echo $brandingcontent; ?></p>
                    </div>
                </div>
            </div>
            <?php $brandimage = get_post_meta(get_the_ID(), '_branding-image', true);
            if(!empty($brandimage)) : ?>
            <div class="branding-image">
                <img src="<?php echo $brandimage; ?>" alt="branding-image">
            </div>
            <?php endif; ?>
        </div>
    </section>
    <div class="bbs-spacer"></div>
    <!-- =========================
    Branding Area End
    ========================== -->
    <?php endif;
    if(!empty($typocontent)) : ?>
    <!-- =========================
    Typhography Area Start
    ========================== -->
    <section class="singleservice_typography-area">
        <div class="container">
            <div class="row title-content">
                <div class="col-lg-3"> 
                    <div class="typography-title">
                        <h2 class="text-uppercase for-desktop d-none d-lg-block"><?php _e('Typo <br> graphy', 'backbencher'); ?></h2>
                        <h2 class="text-uppercase for-mobile d-lg-none"><?php _e('Typography', 'backbencher'); ?></h2>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="typography-content">
                        <p><?php echo $typocontent; ?></p>
                    </div>
                </div>
            </div>
            <?php $typoimage = get_post_meta(get_the_ID(), '_typography-image', true);
            if(!empty($typoimage)) : ?>
            <div class="typography-image">
                <img src="<?php echo $typoimage; ?>" alt="typography image">
            </div>
            <?php endif; ?>
        </div>
    </section>
    <div class="bbs-spacer"></div>
    <!-- =========================
    Typhography Area End
    ========================== -->
    <?php endif;
    if(!empty($workcontent)) : ?>
    <!-- =========================
    Work Process Area Start
    ========================== -->
    <section class="singleservice_workprocess-area">
        <div class="container">
            <div class="row title-content">
                <div class="col-lg-3"> 
                    <div class="workprocess-title">
                        <h2 class="text-uppercase"><?php _e('work process', 'backbencher'); ?></h2>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="workprocess-content">
                        <p><?php echo $workcontent; ?></p>
                    </div>
                </div>
            </div>
            <?php $workimage = get_post_meta(get_the_ID(), '_workprocess-image', true);
            if(!empty($workimage)) : ?>
            <div class="workprocess-image">
                <img src="<?php echo $workimage; ?>" alt="workprocess-image">
            </div>
            <?php 
            endif; ?>
        </div>
    </section>
    <div class="bbs-spacer"></div>
    <!-- =========================
    Work Process Area End
    ========================== -->
    <?php 
    endif; ?>
    <!-- =========================
    Related Project Start
    ========================== -->
    <?php 
    $sercurrent_post = get_post(get_the_ID());
    // Define your criteria for recommended posts (example: same category)
    $serrecommend_posts = new WP_Query(array(
    'post_type'      => 'bbs-project',
    'category__in'   => wp_get_post_categories($sercurrent_post->ID),  //post categories
    'post__not_in'   => array($sercurrent_post->ID),  //for after post
    'posts_per_page' => 2,
    'order'          => 'DESC',
    ));
    if ($serrecommend_posts->have_posts()) : //if have related post ?>
    <section class="service-related_post relatedblog-area">
        <div class="container">
            <div class="related_post-title">
                <h2 class="text-uppercase"><?php _e('more works you may like', 'backbencher'); ?></h2>
            </div>
            <!-- blog items -->
            <div class="relatedblog-items">
                <?php while ($serrecommend_posts->have_posts()) : $serrecommend_posts->the_post() ; //loop for post ?>
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
                        // main category name show but showing subcategory posts here
                        $post_categories = get_the_terms(get_the_ID(), 'bbsproject_tax');

                        if (!empty($post_categories)) {
                            $main_category = '';

                            foreach ($post_categories as $post_category) {
                                if ($post_category->parent) {
                                    $category_hierarchy = get_term_parents_list($post_category->term_id, 'bbsproject_tax', array('separator' => ' / ', 'link' => false));
                
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
                <?php endwhile; wp_reset_postdata(); //end loop & reset ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- =========================
    Related Project End
    ========================== -->

<?php  	endwhile;

else: 
	_e('No Services', 'backbencher');

endif; ?>