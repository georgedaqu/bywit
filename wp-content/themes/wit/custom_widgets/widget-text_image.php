
<?php if(get_row_layout() == 'text_image'): ?>

<?php

$sectionTitle = get_sub_field('section_shadow_sub_title');
$sectionText = get_sub_field('section_text');
$sectionImage = get_sub_field('section_image');

?>

<section class="text_image">
	<div class="text_image_left">
		<div class="shadow"><?php echo $sectionTitle  ?></div>
		<div class="text_image_desc">
			<?php echo $sectionText ?>
		</div>
	</div>
	<figure>
		<img src="<?php echo $sectionImage['url'] ?>" alt="<?php echo $sectionImage['alt'] ?>">
	</figure>
</section>

<?php endif; ?>
