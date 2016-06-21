<div class="bucket expand cf">
	<?php foreach(get_sub_field('section') as $row): ?>
	<div class="item">
		<a href="#" class="title"><?php echo $row['title']; ?> <i class="icon-plus-sign"></i></a>
		<div class="content">
			<?php echo $row['content']; ?>
		</div>
	</div>
	<?php endforeach; ?>
</div>