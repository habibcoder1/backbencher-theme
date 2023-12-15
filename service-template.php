<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Service Page Template
 * 
 * Template Name: BBS Service Template
 * */

// ABSPATH Defined
if (!defined('ABSPATH')) {
	exit('not valid');
};

get_header(); ?>


<!-- =========================
	Page Heading Start
========================== -->
<?php while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; ?>
<!-- =========================
	Page Heading End
========================== -->
<!-- =========================
	Service Details Tab Start
========================== -->
<section class="service_details-area blog_tab-area">
	<div class="container">
		<div class="category_blog-tab">
			<div class="tab-menu-searchfilter">
				<!-- tab menu item -->
				<ul class="tab-menuitem">
					<li data-filter="all"><?php _e('all', 'backbencher'); ?></li>
					<?php
						$parent_category = get_term_by('slug', 'ui-ux-design', 'bbsservice_tax');
						$parent_category_id = $parent_category->term_id;

						// Get subcategories of the specified parent category
						$subcategories = get_terms(array(
							'taxonomy' => 'bbsservice_tax',
							'parent'   => $parent_category_id,
							'order'    => 'DESC',
						));

						foreach ($subcategories as $subcat) : ?>
							<li data-filter=".<?php echo esc_attr($subcat->slug); ?>">
							<?php echo esc_html($subcat->name); ?></li>
						<?php endforeach;
					?>
				</ul>
				<!-- search filter --> 
				<div class="search-filter">
					<form action="#" id="service-serachform" method="POST">
						<?php wp_nonce_field('bbs_service_ajax_search_nonce', 'nonce'); ?>

						<input type="text" name="servicesearch" id="servicesearch" placeholder="Search...">

						<label for="searvicefilter"><?php _e('Filter:', 'backbencher'); ?></label>
						<select name="searvicefilter" id="searvicefilter">
							<option value="all"><?php _e('All Work', 'backbencher'); ?></option>
							<?php 
								$parent_category    = get_term_by('slug', 'ui-ux-design', 'bbsservice_tax');
								$parent_category_id = $parent_category->term_id;

								$subcategories = get_terms(array(
									'taxonomy' => 'bbsservice_tax',
									'parent'   => $parent_category_id,
								));
								foreach($subcategories as $subcategory){
									echo '<option value="' . esc_attr($subcategory->slug) . '">' . esc_html($subcategory->name) . '</option>';
								}
							?>
						</select>
						<input type="submit" style="display: none;" value="search">
					</form>
				</div>
			</div>
			<!-- blog items -->
			<div class="allblog-items">
				<?php
				// Get the parent category ID
				$parent_category = get_term_by('slug', 'ui-ux-design', 'bbsservice_tax');
				$parent_category_id = $parent_category->term_id;

				// Get subcategories of the specified parent category
				$subcategories = get_terms(array(
					'taxonomy' => 'bbsservice_tax',
					'parent'   => $parent_category_id,
				));

				foreach ($subcategories as $subcategory) :
					// Query posts for the current subcategory
					$category_posts = new WP_Query(array(
						'post_type'      => 'bbs-service',
						'posts_per_page' => -1,
						'tax_query'      => array(
							array(
								'taxonomy' => 'bbsservice_tax',
								'field'    => 'term_id',
								'terms'    => $subcategory->term_id,
							),
						),
					));

					if ($category_posts->have_posts()) : ?>
						<div class="<?php echo esc_attr($subcategory->slug); ?> mix blog-details">
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
												$category_names = array();
												foreach ($post_categories as $post_category) {
													$category_names[] = $post_category->name;
												}
												echo '<h3 class="text-uppercase dot-title">' . implode(' / ', $category_names) . '</h3>';
										} ?>
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
					<?php endif;
				endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- =========================
	Service Details Tab End
========================== -->



<?php get_footer(); ?>