<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Blog Page
 * */

if (!defined('ABSPATH')){
	exit('not valid');
};


if(have_posts()) : ?>

    <section class="blog_slider-area" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/blog-sliderbg.svg' ); ?>');">
        <div class="container">
            <div class="blog-slider_details swiper mySwiper">
                <div class="blog-slider swiper-wrapper">
                    <?php
                    $args = array(
                        'posts_per_page' => 5, // Show the last 5 posts
                        'order'          => 'DESC',
                    );
                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post(); ?>
                    <!-- single blog -->
                    <article class="single-item swiper-slide blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <!-- thumb -->
                        <div class="thumb-img">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php $bannerimg = get_post_meta(get_the_ID(), '_defaultpost_banner-image', true);
                                if(!empty($bannerimg)) : ?>
                                    <img src="<?php echo $bannerimg; ?>" alt="post-banner-image">
                                <?php 
                                else: 
                                    the_post_thumbnail();

                                endif; ?>
                            </a>
                        </div>
                        <!-- title -->
                        <div class="blog-title">
                            <a href="<?php the_permalink(); ?>"><h2 class="text-uppercase"><?php the_title(); ?></h2></a>
                        </div>
                        <!-- blog content -->
                        <div class="blog-content">
                            <p><?php echo wp_trim_words(get_the_content(), 80, ''); ?> </p>
                        </div>
                        <!-- category -->
                        <div class="category-name">
                            <?php 
                             $post_categories = get_the_category();
                             if ($post_categories) {
                                 $category_names = array();
                                 foreach ($post_categories as $post_category) {
                                     $category_names[] = $post_category->name;
                                 }
                                 echo '<h4 class="text-uppercase">' . implode(' / ', $category_names) . '</h4>';
                             } ?>
                        </div>
                        <!-- reading time -->
                        <div class="reading-time">
                            <p class="text-capitalize"><?php echo get_post_meta(get_the_ID(), '_readingtime', true); ?></p>
                        </div>
                    </article> <!-- end single blog -->
                    <?php endwhile; wp_reset_postdata(); // end loop ?>
                </div>
            </div>
        </div>
        <!-- pagination //number -->
        <div class="swiper-pagination"></div>
        <!-- autoplay round -->
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </section>


   <?php 
else:
    _e('No Posts', 'atsbd');
endif;