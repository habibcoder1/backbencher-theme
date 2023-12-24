<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Project Page Template
 * 
 * Template Name: UI/UX Project Template
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
					<li data-filter=".mobile-app"><?php _e('mobile app', 'backbencher'); ?></li>
					<li data-filter=".website"><?php _e('website', 'backbencher'); ?></li>
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
								$parent_category    = get_term_by('slug', 'ui-ux-design', 'bbsproject_tax');
								$parent_category_id = $parent_category->term_id;

								$subcategories = get_terms(array(
									'taxonomy' => 'bbsproject_tax',
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
				<!-- For Website Category -->
				<?php
				$website_cat_posts = new WP_Query(array(
					'post_type'      => 'bbs-project',
					'posts_per_page' => -1,
					'tax_query'      => array(
						array(
							'taxonomy' => 'bbsproject_tax',
							'field'    => 'slug',    
							'terms'    => 'website', 
						),
					),
				));
				if ($website_cat_posts->have_posts()) : ?>
					<div class="website mix blog-details">
						<?php while ($website_cat_posts->have_posts()) : $website_cat_posts->the_post(); ?>
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
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				<?php endif; ?>

				<!-- For Mobile App Category -->
				<?php
				$mobile_cat_posts = new WP_Query(array(
					'post_type'      => 'bbs-project',
					'posts_per_page' => -1,
					'tax_query'      => array(
						array(
							'taxonomy' => 'bbsproject_tax',
							'field'    => 'slug', 
							'terms'    => 'mobile-app', 
						),
					),
				));
				if ($mobile_cat_posts->have_posts()) : ?>
					<div class="mobile-app mix blog-details">
						<?php while ($mobile_cat_posts->have_posts()) : $mobile_cat_posts->the_post(); ?>
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
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- =========================
	Service Details Tab End
========================== -->



<?php get_footer(); ?>