<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Job Page Template
 * 
 * Template Name: BBS Career Template
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

<!-- career area -->
<section class="career-area">
	<div class="container">
		<!-- saerch, title -->
		<div class="job_serach-title">
			<div class="title">
				<h2><?php _e('Join Backbenchers', 'backbencher'); ?></h2>
			</div>
			<!-- search form -->
			<div class="search-filter">
				<form action="#" id="job-serachform" method="POST">
					<?php wp_nonce_field('bbs_job_ajax_search_nonce', 'nonce'); ?>

					<input type="text" name="jobservice" id="jobservice" placeholder="Search...">
					<label for="jobsearchfilter"><?php _e('Filter:', 'backbencher'); ?></label>
					<select name="jobsearchfilter" id="jobsearchfilter">
						<option value="all"><?php _e('All', 'backbencher'); ?></option>
						<?php
							$taxonomy = 'career_department';
							$terms = get_terms(array(
								'taxonomy' => $taxonomy,
								'hide_empty' => false, // Set to true if you only want to show terms with posts
							));

							if (!empty($terms) && !is_wp_error($terms)) {
								foreach ($terms as $term) { ?>
									<option value="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></option>
								<?php
								}
							}
						?>
					</select>
					<input type="submit" style="display: none;" value="search">
				</form>
			</div>
		</div>
		<!-- job post item -->
		<div class="job-post-items">
			<ul class="career-items">
				<?php 
				$career = new WP_Query([
					'post_type'      => 'bbs-career',
					'posts_per_page' => 10, //10 items will show
				]);
				if($career->have_posts()) :
					while($career->have_posts()) : $career->the_post() ;
				?>
					<!-- single item -->
					<li>
						<div class="job-title">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
						<div class="job-details">
							<div class="row">
								<?php $address = get_post_meta(get_the_ID(), '_jobaddress', true);
								if(!empty($address)) : ?>
								<!-- location -->
								<div class="col-lg-3 col-md-6">
									<div class="location-details">
										<div class="location-title">
											<p class="text-capitalize"><?php _e('location', 'backbencher'); ?></p>
										</div>
										<div class="location">
											<p><?php echo esc_html($address); ?></p>
										</div>
									</div>
								</div>
								<?php endif; 
								$salary = get_post_meta(get_the_ID(), '_jobsalary-range', true);
								if(!empty($salary)) :
								?>
								<!-- salary -->
								<div class="col-lg-3 col-md-6">
									<div class="salary-details">
										<div class="salary-title">
											<p class="text-capitalize"><?php _e('salary', 'backbencher'); ?></p>
										</div>
										<div class="salary">
											<p class="text-capitalize"><?php echo esc_html($salary); ?></p>
										</div>
									</div>
								</div>
								<?php endif; 
								$deadline = get_post_meta(get_the_ID(), '_jobdeadline', true);
								if(!empty($deadline)) : ?>
								<!-- deadline -->
								<div class="col-lg-3 col-md-6">
									<div class="deadline-details">
										<div class="deadline-title">
											<p class="text-capitalize"><?php _e('deadline', 'backbencher'); ?></p>
										</div>
										<div class="deadline">
										<?php
											$formatted_deadline = date('d F Y', strtotime($deadline));
											echo '<p>' . esc_html($formatted_deadline) . '</p>';
										?>
										</div>
									</div>
								</div>
								<?php endif; ?>
								<!-- contact btn -->
								<div class="col-lg-3 col-md-6">
									<div class="apply-btn">
										<a href="<?php the_permalink(); ?>" class="text-capitalize bbsBtn"><?php _e('apply now', 'backbencher'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				<?php endwhile; wp_reset_postdata();
				endif; ?>
			</ul>
		</div>
	</div>
</section>


<?php get_footer(); ?>