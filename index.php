<?php  
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * This template for displaying blog page
 */


if(!defined('ABSPATH')){
    exit('not valid');
};


get_header(); ?>

    <!-- =========================
        Blog Page Heading Start
    ========================== -->
    <section class="blog-pageheading">
        <div class="container">
            <div class="page-title text-center">
                <?php $blogtitle = get_theme_mod('bbs_blog_page_title') ? get_theme_mod('bbs_blog_page_title') : 'blog'; ?>
                <h3 class="text-uppercase dot-title"><?php echo $blogtitle; ?></h3>
            </div>
            <div class="blogpage-title">
                <?php
                $blogpheading = get_theme_mod('bbs_blog_pageheading') ? get_theme_mod('bbs_blog_pageheading') : 'best of the week';
                ?>
                <h1 class="text-uppercase text-center"><?php echo $blogpheading; ?></h1>
            </div>
            <div class="pageheading-content text-center">
                <p><?php echo get_theme_mod('bbs_blog_pagecontent'); ?></p>
            </div>
        </div>
    </section>
    <!-- =========================
        Blog Page Heading End
    ========================== -->
    <!-- =========================
        Blog Slider Start
    ========================== -->
    <?php get_template_part('template_parts/blog_page'); ?>
    
    <!-- =========================
        Blog Slider End
    ========================== -->
    <!-- =========================
        Blog Tab Area Start
    ========================== -->
    <section class="blog_tab-area">
        <div class="container">
            <div class="category_blog-tab">
                <!-- tab menu item -->
                <ul class="tab-menuitem">
                    <li data-filter="all"><?php _e('all', 'backbencher'); ?></li>
                    <?php
                    $categories = get_categories(['order' => 'DESC', 'orderby' => 'date']);
                    foreach ($categories as $cat) :
                        if ($cat->slug !== 'uncategorized' && $cat->count > 0) : ?>
                            <li data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>
                        <?php endif;
                    endforeach;
                    ?>
                </ul>
                <!-- blog items -->
                <div class="allblog-items">
                    <?php
                    $categories = get_categories();  
                    foreach($categories as $category) :
                        $category_posts = new WP_Query([
                            'post_type'      => 'post',
                            'posts_per_page' => -1, // Show all posts for the category
                            'category_name'  => $category->slug,
                        ]);

                        if ($category->slug !== 'uncategorized') : ?>
                            <div class="<?php echo $category->slug; ?> mix blog-details">
                                <?php
                                if ($category_posts->have_posts()) :
                                    while ($category_posts->have_posts()) : $category_posts->the_post(); ?>
                                        <!-- single item -->
                                        <article class="blog-box blog-item">
                                            <!-- thumb -->
                                            <div class="thumbnail">
                                                <a href="<?php the_permalink(); ?>" class="text-decoration-none" title="<?php the_title(); ?>">
                                                    <?php the_post_thumbnail(); ?>
                                                </a>
                                            </div>
                                            <!-- title -->
                                            <div class="post-title">
                                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                                    <h2 class="text-uppercase"><?php echo wp_trim_words(get_the_title(), 3, ''); ?> </h2>
                                                </a>
                                            </div>
                                            <!-- reading time -->
                                            <div class="reading-time">
                                                <p><?php echo get_post_meta(get_the_ID(), '_readingtime', true); ?></p>
                                            </div>
                                            <!-- category -->
                                            <div class="categories">
                                            <?php
                                                $post_categories = get_the_category();
                                                if ($post_categories) {
                                                    $category_names = array();
                                                    foreach ($post_categories as $post_category) {
                                                        $category_names[] = $post_category->name;
                                                    }
                                                    echo '<h3 class="text-uppercase dot-title">' . implode(' / ', $category_names) . '</h3>';
                                                }
                                            ?>
                                            </div>
                                        </article>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                endif; ?>
                            </div>
                        <?php endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================
        Blog Tab Area End
    ========================== -->


<?php 
get_footer();