<?php

$gallery_attrs = get_query_var('gallery_attrs');
$postID = $gallery_attrs['id'];

$query = new WP_Query([
	'post_per_page' => 0,
	'post_type'     => 'gallery',
	'p'             => $postID,
]);

?>
<div class="inline_gallery">
	<?php while ($query->have_posts()) : $query->the_post() ?>
		<?php $gallery = get_field('gallery'); ?>
		<?php foreach ($gallery as $image) : ?>
			<figure>
				<img src="<?php echo $image['sizes']['thumbnail'] ?>">
			</figure>
		<?php endforeach; ?>
	<?php endwhile; ?>
</div>