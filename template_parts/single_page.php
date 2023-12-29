<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Single Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
};

if(have_posts()) :
    while(have_posts()) : the_post() ; ?>

    <!-- =========================
        Single Blog First Start
    ========================== -->
    <section class="single-page single-blog_firstpart blog-pageheading">
        <div class="container">
            <div class="category page-title text-center">
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
            <div class="blog-title blogpage-title">
                <h1 class="text-uppercase text-center"><?php the_title(); ?></h1>
            </div>
            <div class="blog-short_content pageheading-content text-center">
                <p><?php echo wp_trim_words( get_the_content(), '50', '' ); ?></p>
            </div>
            <!-- thumbnail, user, date -->
            <div class="thumb_date-area">
                <!-- thumb -->
                <div class="blog-thumbnail">
                    <?php $bannerimg = get_post_meta(get_the_ID(), '_defaultpost_banner-image', true);
                    if(!empty($bannerimg)) : ?>
                        <img src="<?php echo $bannerimg; ?>" alt="post-banner-image">
                    <?php 
                    else: 
                        the_post_thumbnail();

                    endif; ?>
                </div>
                <!-- user, date -->
                <div class="user-date">
                    <div class="blog-user">
                        <p class="text-uppercase"><?php _e('posted by', 'backbencher'); ?></p>
                        <div class="userimg-name">
                            <?php echo get_avatar(get_the_author_meta('ID'), 21); //21 is avatar size ?>
                            <h3 class="name text-capitalize"><?php the_author(); ?></h3>
                        </div>
                    </div>
                    <div class="blog-date">
                        <p class="text-uppercase"><?php _e('published', 'backbencher'); ?></p>
                        <h3><?php the_time('j M, Y'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================
        Single Blog First End
    ========================== -->

    <!-- =========================
        Single Blog 2nd Start
    ========================== -->
    <section class="single-blog single-blog_secondpart">
        <div class="container">
            <!-- content, table of content -->
            <div class="content-sidebar">
                <div class="row">
                    <div class="col-md-8">
                        <div class="content-area">
                            <?php the_content(); ?>
                        </div>
                        <!-- comments area -->
                        <div class="comments-area">
                        <?php //if(comments_open() || get_comments_number() ) :
                                //comments_template();
                            //endif; ?>
                        </div>
                        <!-- previous next -->
                        <div class="previous_next-post text-center">
                            <!-- <ul>
                                <li> <?php //previous_post_link('%link', ''.'<i class="fa-solid fa-arrow-left"></i>'.' Previous Post'); ?></li>
                                <li> <?php //next_post_link('%link', 'Next Post '.'<i class="fa-solid fa-arrow-right"></i>'.''); ?></li>
                                <?php 
                                /*wp_link_pages(
                                    array(
                                        'before'      => '<div class="page-links">' . __( 'Pages:', 'atsbd' ),
                                        'after'       => '</div>',
                                    )
                                );*/ ?>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- table of content -->
                        <div class="tableofcontent-readingprogressbar">
                            <div class="tableofcontent">
                                <!-- tabel of content -->
                                <div class="tofcontent-title">
                                    <h4><?php _e('Table of contents', 'backbencher'); ?></h4>
                                    <div class="tableof_content-items">
                                        <ul class="tableofcontent-list p-0 list-group-numbered px-0">
                                            <li class="list-group-item"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- progressbar -->
                            <div class="progress bbs_blog-progressbar mt-5">
                                <div class="progress-bar" id="blogProgressBar"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- reading time -->
                        <div class="reading-time">
                            <div class="readingtime-bar"></div>
                            <div class="reading-time_clock d-flex align-items-center">
                                <div class="clock"><i class="fa-regular fa-clock"></i></div>
                                <div class="timetext text-capitalize"><p><?php echo get_post_meta(get_the_ID(), '_readingtime', true); ?> <?php _e('Read', 'backbencher'); ?></p></div>
                            </div>
                        </div>
                        <!-- social links -->
                        <?php 
                        $page_url   = urlencode(get_the_permalink()); //Get current page URL 
                        $post_title = str_replace( ' ', '%20', get_the_title()); //page title ?>
                        <ul class="social-links"> 
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page_url; ?>&title=<?php echo $post_title; ?>" target="_blank" title="Share on Facebook"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/intent/tweet?url=<?php echo $page_url; ?>&text=<?php echo $post_title; ?>" target="_blank" title="Share on Twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/intent/share?url=<?php echo $page_url; ?>" target="_blank" title="Share on Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $page_url; ?>&title=<?php echo $post_title; ?>" target="_blank" title="Share on LinkedIn"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================
        Single Blog 2nd End
    ========================== -->
   <?php endwhile; //end loop ?>


    <!-- =========================
    Related Blog Start
    ========================== -->
    <?php 
    $bbscurrent_post = get_post(get_the_ID());
    // Define your criteria for recommended posts (example: same category)
    $bbsrecommend_posts = new WP_Query(array(
    'post_type'      => 'post',
    'category__in'   => wp_get_post_categories($bbscurrent_post->ID),  //post categories
    'post__not_in'   => array($bbscurrent_post->ID),  //for after post
    'posts_per_page' => 2,
    'order'          => 'DESC',
    )); 
    if ($bbsrecommend_posts->have_posts()) : //if have related post ?>
    <section class="relatedblog-area">
        <div class="container">
            <!-- border top -->
            <hr>
            <!-- title -->
            <div class="blog-title">
                <h2><?php _e('Blogs You May like', 'backbencher'); ?></h2>
            </div>
            <!-- blog items -->
            <div class="relatedblog-items">
                <?php while ($bbsrecommend_posts->have_posts()) : $bbsrecommend_posts->the_post() ; //loop for post ?>
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
                        $categories = get_the_terms(get_the_ID(), 'category');
                        if ($categories && !is_wp_error($categories)) {
                            $category_names = array();
                            foreach ($categories as $category) {
                                $category_names[] = $category->name;
                            }
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
    <?php 
else:
    _e('No Posts', 'backbencher');
endif; 