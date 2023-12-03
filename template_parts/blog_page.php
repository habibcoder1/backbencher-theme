<?php 
/**
 * @package AllThe Shop BD
 * Version: 1.0.0
 * 
 * Template for displaying Blog Page
 * */

if (!defined('ABSPATH')){
	exit('not valid');
};


if(have_posts()) :
    while(have_posts()) : the_post() ; ?>

    <article class="mb-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
        <div class="post-thumb">
            <a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="tag mt-2">
            <a href="#"><p class="uppercase"><?php the_tags('', ' / ', ''); ?></p></a>
        </div>
        <div class="title mb-1">
            <a href="<?php the_permalink(); ?>"><h2 class="font-semibold text-xl leading-7 transition-all hover:text-[#DD3627]"><?php the_title(); ?></h2></a>
        </div>
        <div class="description">
            <p><?php echo wp_trim_words( get_the_content(), 30, '' ); ?></p>
        </div>
    </article>

   <?php endwhile; //end loop

else:
    _e('No Posts', 'atsbd');
endif;