<?php get_header(); ?>

<div class="breadcrumbs">
	<?php if(function_exists('bcn_display'))
	{
		bcn_display();
	}?>
</div>

<div id="content" class="body-text">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1><br />
                <?php $members = get_field('member_spotlight'); ?>
                <h3><?php echo $members[0]['name']; ?></h3>
                <img class="alignleft" src="<?php echo $members[0]['image']['url']; ?>" width="100" />
                <p><?php echo $members[0]['text']; ?></p>
	<?php endwhile; ?>
            <br /><br />
            For more Members see the <a href="<?php echo get_permalink(893); ?>">Member Spotlight Archive</a>.
            <br /><br />
</div>

<div id="sidebar">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>