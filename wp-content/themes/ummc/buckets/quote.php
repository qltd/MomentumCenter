<?php $rows = get_sub_field('quotes' ); 
	$rand_row = $rows[ array_rand( $rows ) ];
?>

<div class="bucket quote">
	<blockquote>
		<?php echo $rand_row['text']; ?>
	</blockquote>
	<span>&mdash; <?php echo $rand_row['author']; ?></span>
</div>