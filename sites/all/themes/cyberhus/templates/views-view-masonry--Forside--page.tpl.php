<?php
/**
 * @file
 * Default view template to display items in a jQuery Masonry grid.
 */
?>

<?php foreach ($rows as $id => $row): ?>
	<div class="masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
		<div class="masonry-icon"></div>
		<div class="masonry-inner">
			<?php print $row; ?>
		</div>
	</div>
<?php endforeach; ?>