
<?php if(get_row_layout() == 'intro'): ?>

<?php

$introImage = get_sub_field('intro_image');
$introTitle = get_sub_field('intro_title');
$introDesc = get_sub_field('intro_description');
$introSignature = get_sub_field('intro_signature');

?>

<section class="intro trans-all-4">
	<div class="container">
		<div class="intro_left">
			<figure>
				<img src="<?php echo $introImage['url'] ?>" alt="<?php echo $introImage['alt'] ?>">
			</figure>
		</div>
		<div class="intro_right">
			<h3 class="intro_title"><?php echo $introTitle ?></h3>
			<div class="intro_desc">
				<?php echo $introDesc ?>
			</div>
			<div class="intro_signature">
                <?php echo $introSignature ?>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>
