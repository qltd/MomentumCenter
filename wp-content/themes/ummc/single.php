<?php get_header(); ?>

<div class="breadcrumbs">
	<?php if(function_exists('bcn_display')){ bcn_display(); }?>
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
					} elseif ($category[0]->slug == 'call-for-proposal'){
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
				<div class="text"><?php the_content(); ?></div>
				<div class="tags"><?php the_tags(); ?></div>
				<div class="share">Share:
					<a title="Share on Facebook" href="http://www.facebook.com/sharer.php?s=100&p[title]=<?php the_title(); ?>&p[summary]=<?php echo strip_tags(get_the_excerpt()); ?>&p[url]=<?php echo get_permalink(); ?>"
  target="_blank"><i class="icon-facebook"></i></a>
  					<a title="Share on Twitter" target="_blank" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php echo get_permalink(); ?>
"><i class="icon-twitter"></i></a>
  					<a target="_blank" href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'><i class="icon-pinterest"></i></a>
  				</div>
  				<div class="post-comments">
					<?php comments_template(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>
</div>

<div id="sidebar">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>