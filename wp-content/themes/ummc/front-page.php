<?php get_header(); ?>

<div class="home-welcome">
	<?php the_field('welcome_text'); ?>
</div>

<div id="sidebar_callout">
	<?php the_field('sidebar_callout'); ?>
</div>

<div id="content" class="body-text">

	<div id="home-callouts" class="cf">
		<div id="co1" class="col text">
			<i class="icon-users"></i>
			<h3>Prospective Members</h3>
			<p>Are you interested in joining a cross-disciplinary, collaborative group of researchers dedicated to ending childhood obesity? <a href="<?php echo get_permalink('11'); ?>">Read our membership guidelines</a> to learn more about our efforts and how you can get involved.</p>
		</div>

		<div id="co2" class="col video">
			<a href="<?php bloginfo('url'); ?>/join-momentum/">
				<?php if (wpmd_is_device()): ?>
					<img src="<?php bloginfo('template_directory'); ?>/img/mobile-slide-1.jpg" width="242"  alt="Create Change Join Now" />
				<?php else: ?>
					<img src="<?php bloginfo('template_directory'); ?>/img/video-slide-1.jpg" alt="Create Change Join Now" />
				<?php endif; ?>
			</a>
		</div>

		<div id="co3" class="col video">
			<a href="<?php echo get_permalink('13'); ?>">
				<?php if (wpmd_is_device()): ?>
					<img src="<?php bloginfo('template_directory'); ?>/img/mobile-slide-3.jpg" width="316" alt="Discover More View Resources" />
				<?php else: ?>
					<img src="<?php bloginfo('template_directory'); ?>/img/video-slide-2.jpg" alt="Discover More View Resources" />
				<?php endif; ?>
			</a>
		</div>

		<div id="co4" class="col text">
			<i class="icon-chat-empty"></i>
			<h3>Active Members</h3>
			<p>Already a member of the Momentum Center? <a href="<?php echo get_permalink('13'); ?>">Visit our Resources page</a> to access important information and connect with others.</p>
		</div>

		<div id="co5" class="col text">
			<i class="icon-leaf"></i>
			<h3>Donors</h3>
			<p>The Momentum Center seeks funding from organizations and individuals who are passionate about creating healthy futures for our children. <a href="<?php echo get_permalink('199'); ?>">Visit our Donations page</a> to learn how you can contribute.</p>
		</div>

		<div id="co6" class="col video">
			<a href="<?php bloginfo('url'); ?>/about/donate/">
				<?php if (wpmd_is_device()): ?>
					<img src="<?php bloginfo('template_directory'); ?>/img/mobile-slide-2.jpg" width="304" alt="Shape Our Future Give Today" />
				<?php else: ?>
					<img src="<?php bloginfo('template_directory'); ?>/img/video-slide-3.jpg" alt="Shape Our Future Give Today" />
				<?php endif; ?>

			</a>
		</div>
	</div> <!-- #home-callouts -->

</div> <!-- #content -->

<div id="sidebar">
	<div id="buckets">
		<?php the_field('sidebar'); ?>
	</div> <!-- #buckets -->
</div> <!-- #sidebar -->

<?php get_footer(); ?>