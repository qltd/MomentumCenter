<?php get_header(); ?>

<div class="breadcrumbs">
	<?php if(function_exists('bcn_display'))
	{
		bcn_display();
	}?>
</div>

<div id="content" class="body-text">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
	<?php endwhile; ?>
</div>

<div id="sidebar">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>