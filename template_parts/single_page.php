<?php 
/**
 * @package AllThe Shop BD
 * Version: 1.0.0
 * 
 * Template for displaying Single Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
};

if(have_posts()) :
    while(have_posts()) : the_post() ; ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-title">
            <h2 class="font-semibold text-[34px] leading-10"><?php the_title(); ?></h2>
        </div>
        <div class="post_date_author_category flex mt-2 mb-3">
            <?php 
            $the_date = mysql2date( get_option( 'date_format' ), $post->post_date );
            ?>
            <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>" class="date capitalize mr-2 sm:mr-3 md:mr-2 lg:mr-5 transition-all hover:text-[#DD3627]"> <?php echo $the_date; ?></a>
            <p class="author sm:mr-3 md:mr-2 lg:mr-5 flex items-center">
                <?php echo get_avatar(get_the_author_meta('ID'), 21); //21 is avatar size ?>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="capitalize transition-all hover:text-[#DD3627]"> <?php _e('By', 'insurance-seba'); ?> <?php the_author(); ?></a>
            </p>
            <p class="tags hidden sm:block sm:mr-3 md:mr-2 lg:mr-5"><?php the_tags('', ' / ', ''); ?></p>
            <p class="comments hidden lg:block sm:mr-3 md:mr-1 lg:mr-5">
                <i class="fa-regular fa-comment mr-1"></i>
                <a href="<?php comments_link(); ?>" class="capitalize transition-all hover:text-[#DD3627]"> <?php comments_number( 'Leave a Comment', '1 Comment', '% Comments' ); ?></a>
            </p>
            
        </div>
        <div class="post-thumbnail mb-6">
            <?php the_post_thumbnail(); ?>
        </div>
        <hr>
        <div class="post-content mt-4">
            <?php the_content(); ?>
        </div>
    </article>
    <hr class="mt-5 mb-7">
    <!-- post social -->
    <div class="post-social mb-6">
        <?php 
        $page_url   = urlencode(get_the_permalink()); //Get current page URL 
        $post_title = str_replace( ' ', '%20', get_the_title()); //page title 
        $thumb = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));  //Post Thumbnail for pinterest
        // For Pinterest Image
        if(!empty($thumb)){
            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$page_url.'&amp;media='.$thumb[0].'&amp;description='.$title;
        }else{
            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$page_url.'&amp;description='.$title;
        } ?>
        
        <ul class="social-items">
            <!-- facebook -->
            <li class="mr-3"><a href="<?php echo esc_url('https://www.facebook.com/sharer/sharer.php?u='. $page_url); ?>&title=<?php echo $post_title; ?>" title="Share On Facebook" target="_blank"><i class="fa-brands fa-facebook-f px-[10px] py-2 rounded-lg text-white bg-blue-400 transition-all duration-300 hover:text-[#DD3627]"></i></a></li>
            <!-- twitter -->
            <li class="mr-3"><a href="<?php echo esc_url('https://twitter.com/intent/tweet?url='. $page_url); ?>&text=<?php echo $post_title; ?>" title="Share On Twitter" target="_blank"><i class="fa-brands fa-twitter px-[10px] py-2 rounded-lg text-white bg-blue-600 transition-all duration-300 hover:text-[#DD3627]"></i></a></li>
            <!-- linkedin -->
            <li class="mr-3"><a href="<?php echo esc_url('https://www.linkedin.com/shareArticle?mini=true&url='. $page_url); ?>&title=<?php echo $post_title; ?>" title="Share On LinkedIn" target="_blank"><i class="fa-brands fa-linkedin-in px-[10px] py-2 rounded-lg text-white bg-blue-800 transition-all duration-300 hover:text-[#DD3627]"></i></a></li>
            <!-- pinterest -->
            <li><a href="<?php echo esc_url($pinterestURL); ?>" title="Share On Pinterest" target="_blank"><i class="fa-brands fa-pinterest-p px-[10px] py-2 rounded-lg text-white bg-red-500 transition-all duration-300 hover:text-[#DD3627]"></i></a></li>
        </ul>
    </div>

    <!-- recommended posts -->
    <?php 
    $isebacurrent_post = get_post(get_the_ID());
    // Define your criteria for recommended posts (example: same category)
    $isebarecommend_posts = new WP_Query(array(
        'post_type'      => 'post',
        'category__in'   => wp_get_post_categories($isebacurrent_post->ID),  //post categories
        'post__not_in'   => array($isebacurrent_post->ID),  //for after post
        'posts_per_page' => 2,
        'order'          => 'DESC',
    ));
    if ($isebarecommend_posts->have_posts()) : //if have related post ?>

    <div class="recommended-post">
        <h3 class="title uppercase text-lg font-extrabold"><?php _e('recommended for you', 'insurance-seba'); ?></h3>
        <hr class="mb-6">
        <div class="recommended-post_details grid grid-cols-1 sm:grid-cols-2 sm:gap-6 mb-3">
            <?php while ($isebarecommend_posts->have_posts()) : $isebarecommend_posts->the_post() ; //loop for post ?>
            <article class="mb-5 sm:mb-0">
                <div class="post-thumb mb-3">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="recommended_post-content">
                    <p><?php echo wp_trim_words(get_the_content(), 16, ''); ?></p>
                </div>
            </article>            
            <?php endwhile; wp_reset_postdata(); //end loop & reset ?>
        </div>
    </div>

    <?php endif; //end if for related posts ?>

   <?php endwhile; //end loop

else:
    _e('No Posts', 'atsbd');
endif;