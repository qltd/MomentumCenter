<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package generic
 */
get_header(); ?>

<div id="content">

	<div id="sidebar">
		<div class="search-form">
			<?php get_search_form(); ?>
		</div>
	</div>


	<div id="main" class="body-text">	
		<h1><?php printf('Search Results for: %s','<span>'.get_search_query().'</span>'); ?></h1>
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post-wrap">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				</div>
					
				<?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>
			<?php endwhile; ?>
	
		<?php else : ?>
			<div id="post-0" class="post no-results not-found">
				<h3 class="entry-title">Nothing Found</h3>
				<div class="entry-content">
					<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->
		<?php endif; ?>
		
	</div>
</div>

<?php get_footer(); ?>
