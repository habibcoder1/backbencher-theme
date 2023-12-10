<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Archive Page
 * */

if (!defined('ABSPATH')){
	exit('not valid');
};


if (have_posts()) :
    while (have_posts()) : the_post(); ?>
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
                    <h2 class="text-uppercase"><?php the_title(); ?> </h2>
                </a>
            </div>
            <!-- reading time -->
            <div class="reading-time">
                <p><?php echo get_post_meta(get_the_ID(), '_readingtime', true); ?></p>
            </div>
            <!-- category -->
            <div class="categories">
                <h3 class="text-uppercase dot-title">
                    <?php 
                    $scategories = get_the_terms( get_the_ID(), 'bbsservice_tax');
                    if(!empty($scategories)){
                        $incrc = 1;
                        foreach($scategories as $scat){
                            $scatname = $scat->name;
                            $scaturl  = get_term_link( $scat, 'bbsservice_tax');
                            
                            echo '<a href="'.$scaturl.'">'.$scatname.'</a>';

                            echo ($incrc < count($scategories)) ? ' / ' : '';
                            $incrc++;
                        }
                    }; ?>

                    <?php the_category(' / '); ?>
                </h3>
            </div>
        </article>
    <?php endwhile; wp_reset_postdata();
endif;