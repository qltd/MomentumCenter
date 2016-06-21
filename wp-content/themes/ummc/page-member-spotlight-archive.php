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
                <?php $members = get_field('member_spotlight', 781); ?>
                <?php for ($i=1;$i<count($members);$i++): ?>
                    <h3><?php echo $members[$i]['name']; ?></h3>
                    <img class="alignleft" src="<?php echo $members[$i]['image']['url']; ?>" width="100" />
                    <p><?php echo $members[$i]['text']; ?></p>
                    <br /><br />
                <?php endfor; ?>
	<?php endwhile; ?>
</div>

<div id="sidebar">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>