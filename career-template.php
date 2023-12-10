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
			<div class="search-filter">
				<form action="#" id="service-serachform">
					<input type="text" name="service" id="service" placeholder="Search...">
					<label for="filter">Filter:</label>
					<select name="filter" id="filter">
						<option value="0">All</option>
						<option value="1">UI/UX Design</option>
						<option value="2">Web Design</option>
						<option value="3">Web Development</option>
					</select>
					<input type="submit" style="display: none;" value="search">
				</form>
			</div>
		</div>
		<!-- job post item -->
		<div class="job-post-items">
			<ul class="career-items">
				<!-- single item -->
				<li>
					<div class="job-title">
						<h2>UI/UX Designer</h2>
					</div>
					<div class="job-details">
						<div class="row">
							<!-- location -->
							<div class="col-lg-3 col-md-6">
								<div class="location-details">
									<div class="location-title">
										<p class="text-capitalize"><?php _e('location', 'backbencher'); ?></p>
									</div>
									<div class="location">
										<p>Daisy Garden, House 14 (Level-3), Block A, Main Road, Banasree, Dhaka, Bangladesh</p>
									</div>
								</div>
							</div>
							<!-- salary -->
							<div class="col-lg-3 col-md-6">
								<div class="salary-details">
									<div class="salary-title">
										<p class="text-capitalize"><?php _e('salary', 'backbencher'); ?></p>
									</div>
									<div class="salary">
										<p class="text-capitalize">18,500-25,000</p>
									</div>
								</div>
							</div>
							<!-- deadline -->
							<div class="col-lg-3 col-md-6">
								<div class="deadline-details">
									<div class="deadline-title">
										<p class="text-capitalize"><?php _e('deadline', 'backbencher'); ?></p>
									</div>
									<div class="deadline">
										<p>24 december 2023</p>
									</div>
								</div>
							</div>
							<!-- contact btn -->
							<div class="col-lg-3 col-md-6">
								<div class="apply-btn">
									<a href="#" class="text-capitalize bbsBtn"><?php _e('apply now', 'backbencher'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- single item -->
				<li>
					<div class="job-title">
						<h2>UI/UX Designer</h2>
					</div>
					<div class="job-details">
						<div class="row">
							<!-- location -->
							<div class="col-lg-3 col-md-6">
								<div class="location-details">
									<div class="location-title">
										<p class="text-capitalize"><?php _e('location', 'backbencher'); ?></p>
									</div>
									<div class="location">
										<p>Daisy Garden, House 14 (Level-3), Block A, Main Road, Banasree, Dhaka, Bangladesh</p>
									</div>
								</div>
							</div>
							<!-- salary -->
							<div class="col-lg-3 col-md-6">
								<div class="salary-details">
									<div class="salary-title">
										<p class="text-capitalize"><?php _e('salary', 'backbencher'); ?></p>
									</div>
									<div class="salary">
										<p class="text-capitalize">18,500-25,000</p>
									</div>
								</div>
							</div>
							<!-- deadline -->
							<div class="col-lg-3 col-md-6">
								<div class="deadline-details">
									<div class="deadline-title">
										<p class="text-capitalize"><?php _e('deadline', 'backbencher'); ?></p>
									</div>
									<div class="deadline">
										<p>24 december 2023</p>
									</div>
								</div>
							</div>
							<!-- contact btn -->
							<div class="col-lg-3 col-md-6">
								<div class="apply-btn">
									<a href="#" class="text-capitalize bbsBtn"><?php _e('apply now', 'backbencher'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- single item -->
				<li>
					<div class="job-title">
						<h2>UI/UX Designer</h2>
					</div>
					<div class="job-details">
						<div class="row">
							<!-- location -->
							<div class="col-lg-3 col-md-6">
								<div class="location-details">
									<div class="location-title">
										<p class="text-capitalize"><?php _e('location', 'backbencher'); ?></p>
									</div>
									<div class="location">
										<p>Daisy Garden, House 14 (Level-3), Block A, Main Road, Banasree, Dhaka, Bangladesh</p>
									</div>
								</div>
							</div>
							<!-- salary -->
							<div class="col-lg-3 col-md-6">
								<div class="salary-details">
									<div class="salary-title">
										<p class="text-capitalize"><?php _e('salary', 'backbencher'); ?></p>
									</div>
									<div class="salary">
										<p class="text-capitalize">18,500-25,000</p>
									</div>
								</div>
							</div>
							<!-- deadline -->
							<div class="col-lg-3 col-md-6">
								<div class="deadline-details">
									<div class="deadline-title">
										<p class="text-capitalize"><?php _e('deadline', 'backbencher'); ?></p>
									</div>
									<div class="deadline">
										<p>24 december 2023</p>
									</div>
								</div>
							</div>
							<!-- contact btn -->
							<div class="col-lg-3 col-md-6">
								<div class="apply-btn">
									<a href="#" class="text-capitalize bbsBtn"><?php _e('apply now', 'backbencher'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>


<?php get_footer(); ?>