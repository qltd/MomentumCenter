<?php get_header(); ?>

<div class="breadcrumbs">
	<?php if(function_exists('bcn_display')) { bcn_display(); }?>
</div>

<div id="content" class="body-text">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php $category = get_the_category(); ?>
		<div class="post-wrap <?php echo $category[0]->slug; ?> clearfix cf">
			<div class="left">
				<?php if($category[0]->slug == 'events') {
						echo '<i class="icon-calendar-empty"></i>';
					} elseif ($category[0]->slug == 'articles-papers'){
						echo '<i class="icon-docs"></i>';
					} elseif ($category[0]->slug == 'call-for-proposals'){
						echo '<i class="icon-edit"></i>';
					} else {
						echo '<i class="icon-megaphone"></i>';
				} ?>
				<div class="entry-meta"><?php the_time('M'); ?> <span><?php the_time('d'); ?></span></div><!-- .entry-meta -->
			</div>
			<div class="right">
				<h3 class="category title"><?php echo $category[0]->cat_name; ?></h3>
				<h2 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="meta">
					<?php if (get_field('author')){ echo 'by ' . get_field('author'); }
						if (get_field('where')){ echo '<strong>Where:</strong> ' . get_field('where'); }
						if (get_field('when')){ echo ' <strong>When:</strong> ' . get_field('when'); }
						if (get_field('posted_date')){ echo '<strong>Posted:</strong> ' . get_field('posted_date'); }
						if (get_field('due_date')){ echo ' <strong>Due:</strong> ' . get_field('due_date'); }
					?>
				</div>
				<div class="text"><?php the_excerpt(); ?></div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>
</div>

<div id="sidebar">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>