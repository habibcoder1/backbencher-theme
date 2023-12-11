<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Career Single Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} ?>

<?php get_header(); ?>
    
<?php if(have_posts()) :
	while(have_posts()) : the_post(); ?>
<!-- =========================
	Single Career Area Start
========================== -->
<section class="single-carea-area">
	<div class="container">
		<!-- career title, location, button -->
		<div class="career-titlelocation_btn">
			<div class="row">
				<div class="col-md-9">
					<div class="title">
						<h2 class="text-uppercase"><?php the_title(); ?></h2>
					</div>
					<div class="location">
						<p class="text-capitalize"><?php echo get_post_meta(get_the_ID(), '_jobaddress', true); ?></p>
					</div>
				</div>
				<div class="col-md-3 text-end">
					<div class="btn">
						<a href="<?php echo get_post_meta(get_the_ID(), '_jobapply-btnlink', true); ?>" class="bbsBtn text-capitalize"><?php _e('apply now', 'backbencher'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<!-- salary, deadline, type -->
		<div class="salaray-deadline_type">
			<div class="row">
				<?php $salary = get_post_meta(get_the_ID(), '_jobsalary-range', true);
				if(!empty($salary)) : ?>
				<div class="col-xl-2 col-sm-4 col-lg-3">
					<div class="subtitle">
						<p class="text-capitalize"><?php _e('salary', 'backbencher'); ?></p>
					</div>
					<div class="title">
						<p class="text-capitalize"><?php echo $salary; ?></p>
					</div>
				</div>
				<?php endif; 
				$deadline = get_post_meta(get_the_ID(), '_jobdeadline', true);
				if(!empty($deadline)) : ?>
				<div class="col-xl-2 col-sm-4 col-lg-3">
					<div class="subtitle">
						<p class="text-capitalize"><?php _e('deadline', 'backbencher'); ?></p>
					</div>
					<div class="title">
						<p class="text-capitalize"><?php echo $deadline; ?></p>
					</div>
				</div>
				<?php endif; ?>
				
				<?php 
				$career_terms = get_the_terms(get_the_ID(), 'career_type');
				if(!empty($career_terms)) : ?>
				<div class="col-xl-3 col-sm-4 col-lg-3">
					<div class="subtitle">
						<p class="text-capitalize"><?php _e('type', 'backbencher'); ?></p>
					</div>
					<div class="title">
					<?php
						if ($career_terms && !is_wp_error($career_terms)) {
							$term_names = array();

							foreach ($career_terms as $term) {
								$term_names[] = '<p class="text-capitalize">' . esc_html($term->name) . '</p>';
							}
							echo  implode(' , ', $term_names) ;
						} ?>
					</div>
				</div>
				 <?php endif; ?>
			</div>
		</div>
		<?php $company = get_post_meta(get_the_ID(), '_jobabout-company', true);
		if(!empty($company)) : ?>
		<!-- who is this with -->
		<div class="whothis-with-area career-specification">
			<div class="whothis-title single_career-title">
				<h3 class="text-uppercase"><?php _e('who\'s this with?', 'backbencher'); ?></h3>
			</div>
			<div class="whothi-description single_career-des">
				<p><?php echo $company; ?></p>
			</div>
		</div>
		<?php endif; ?>
		<?php $role = get_post_meta(get_the_ID(), '_jobwhat-role', true);
		if(!empty($role)) : ?>
		<!-- what's the role -->
		<div class="whatsthe_role-area career-specification">
			<div class="whatsthe-title single_career-title">
				<h3 class="text-uppercase"><?php _e('what\'s the role?', 'backbencher'); ?></h3>
			</div>
			<div class="whatsthe-description single_career-des">
				<p><?php echo $role; ?></p>
			</div>
		</div>
		<?php endif; ?>
		<?php $needgds = get_post_meta(get_the_ID(), '_jobneedbegood', true);
		if(!empty($needgds)) : ?>
		<!-- what's do i need -->
		<div class="whatdoneed_role-area career-specification">
			<div class="whatsthe-title single_career-title">
				<h3 class="text-uppercase"><?php _e('what do i need to be good at?', 'backbencher'); ?></h3>
			</div>
			<div class="whatdoneed-description single_career-des">
				<ul>
					<?php foreach($needgds as $needgd) : ?>
					<li><?php echo esc_html($needgd); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<?php endif; ?>
		<?php $skills = get_post_meta(get_the_ID(), '_jobskill', true);
		if(!empty($skills)) : ?>
		<!-- what's skill i need -->
		<div class="whatskill_need-area career-specification">
			<div class="whatsthe-title single_career-title">
				<h3 class="text-uppercase"><?php _e('what skill do i need?', 'backbencher'); ?></h3>
			</div>
			<div class="whatskillneed-description single_career-des">
				<ul>
					<?php foreach($skills as $skill) : ?>
					<li><?php echo esc_html($skill); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<?php endif; ?>
		<?php $benefits = get_post_meta(get_the_ID(), '_jobbenefit', true);
		if(!empty($benefits)) : ?>
		<!-- benefit, perks, bonus -->
		<div class="whatskill_need-area career-specification">
			<div class="whatsthe-title single_career-title">
				<h3 class="text-uppercase"><?php _e('benefit, perks, bonuses', 'backbencher'); ?></h3>
			</div>
			<div class="whatskillneed-description single_career-des">
				<ul>
					<?php foreach($benefits as $benefit) : ?>
					<li><?php echo esc_html($benefit); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
<!-- =========================
	Single Career Area End
========================== -->  

<?php endwhile;
endif; ?>


<?php get_footer(); ?>