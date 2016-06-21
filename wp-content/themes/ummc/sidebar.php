<?php if(is_home() || is_archive() || is_single()):?>
<nav id="side-nav">
	<a href="<?php echo get_permalink(get_option('page_for_posts', true)); ?>" <?php echo (is_home()) ? 'class="active"' : ''; ?>><?php echo get_the_title(get_option('page_for_posts', true)); ?></a>
	<ul>
		<?php
			$current = get_the_category();
			$args = array ('hierarchical ' => 0);
			$cats = get_categories( $args ); 
			foreach ($cats as $cat) {
				$active = ($current[0]->term_id == $cat->term_id && !is_home()) ? 'class="active"' : '';
				echo '<li ' . $active . '><a href="' . get_category_link( $cat->term_id ) . '">'.$cat->name.'</a></li>';
			}
		?>
	</ul>
</nav>
<?php elseif(!is_front_page() && !is_home()): 
	$parent = get_post_ancestors($post->ID); 
	$count = count($parent);
	$level = ($count) ? $parent[$count-1] : '';
	$level = ($level == '') ? $level = $post->ID : $level;
?>
<nav id="side-nav">
	<a href="<?php echo get_permalink($level); ?>" class="section-title <?php echo (is_page($level)) ? 'active' : ''; ?>"><?php echo get_the_title($level); ?></a>
	<ul>
	<?php $children = wp_list_pages('title_li=&child_of='.$level.'&echo=0&depth=2');
	echo $children; ?>
	</ul>
</nav>
<?php endif; ?>


<div id="buckets">
	<?php the_field('sidebar'); ?>
</div>