<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Service Single Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}  ?>

<?php 
if(have_posts()) :
    while(have_posts()) : the_post() ; ?>

    <!-- =========================
    Single Service Details
    ========================== -->
    <section class="single_service-page">
        <div class="container">
            <!-- thumb -->
            <div class="service-img">
                <?php the_post_thumbnail(); ?>
            </div>
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
    Related Blog Start
    ========================== -->
    <?php 
    $sercurrent_post = get_post(get_the_ID());
    // Define your criteria for recommended posts (example: same category)
    $serrecommend_posts = new WP_Query(array(
    'post_type'      => 'bbs-service',
    'category__in'   => wp_get_post_categories($sercurrent_post->ID),  //post categories
    'post__not_in'   => array($sercurrent_post->ID),  //for after post
    'posts_per_page' => 2,
    'order'          => 'DESC',
    ));
    if ($serrecommend_posts->have_posts()) : //if have related post ?>
    <section class="service-related_post relatedblog-area">
        <div class="container">
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
                        $post_categories = get_the_terms(get_the_ID(), 'bbsservice_tax');
                        $category_names = array();

                        if (!empty($post_categories)) {
                            foreach ($post_categories as $category) {
                                $category_names[] = esc_html($category->name);
                            }
                        }
                        // added / for more
                        if (!empty($category_names)) {
                            echo '<h3 class="text-uppercase dot-title">' . implode(' / ', $category_names) . '</h3>';
                        }
                    ?>
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
    Related Blog End
    ========================== -->

<?php  	endwhile;

else: 
	_e('No Services', 'backbencher');

endif; ?>