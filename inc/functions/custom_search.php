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


/* ==========================
	for search ajax
========================== */
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
                        <h3 class="text-uppercase dot-title">
                            <?php 
                            $taxono = get_the_terms(get_the_ID(), 'bbsservice_tax');  
                            if (!empty($taxono)) {
                                $i = 1;
                                foreach ($taxono as $tax) {
                                    $tax_name = $tax->name;
                                    $tax_link = get_term_link($tax, 'bbsservice_tax');   
                            
                                    echo '<a href="'.esc_url($tax_link).'">'.__($tax_name).'</a>';
                                    
                                    echo ($i < count($taxono)) ? " / " : "";
                                    $i++;
                                };
                            } ?>
                        </h3>
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
        <p><?php _e('No search found.', 'backbencher'); ?></p>
    <?php 
    endif;

    die();
}
