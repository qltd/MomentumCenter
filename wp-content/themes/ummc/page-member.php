<?php
/* Template Name: Members */
get_header(); ?>

<div class="breadcrumbs">
	<?php if(function_exists('bcn_display')) { bcn_display(); }?>
</div>

<div id="content" class="body-text">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
	<?php endwhile; ?>

	<div class="member-list">
	<?php while(has_sub_field('member_list')):  ?>
		<div class="member cf">
			<div class="left">
				<img src="<?php the_sub_field('image'); ?>" height="150" />
			</div>
			<div class="right">
				<a href="#" class="info-btn cf">
					<span class="text"><?php the_sub_field('title'); ?></span>

						<span class="more">More <i class="icon-expand"></i></span>

				</a>
				<div class="job-title"><?php the_sub_field('job_title'); ?></div>
				<div class="job-title"><a href="mailto:<?php the_sub_field('email'); ?>" ><?php the_sub_field('email'); ?></a></div>
				<div class="job-title last"><strong>Specialty:</strong> <?php the_sub_field('specialty'); ?></div>
			</div>
		</div>
		<div class="member-info">
			<?php the_sub_field('additional_info'); ?>
		</div>
	<?php endwhile; ?>
	</div>

</div>

<div id="sidebar">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>