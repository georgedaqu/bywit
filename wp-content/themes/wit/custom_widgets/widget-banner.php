
<?php if(get_row_layout() == 'banner'): ?>

<?php

$bannerImage = get_sub_field('banner_image');
$bannenCalloutPosition = get_sub_field('callout');
$bannerTitle = get_sub_field('banner_title');
$bannerTitleShadow = get_sub_field('banner_title_shadow');
$bannerDesc = get_sub_field('banner_description');
$bannerSize = get_sub_field('banner_size');
?>

<section class="banner <?php echo $bannerSize ?>">
	<figure class="bak">
        <?php
            if($bannerSize == 'big'){
                ?>
                    <img src="<?php echo $bannerImage['sizes']['banner-image-big'] ?>" alt="<?php echo $bannerImage['alt'] ?>">
                <?php
            }else{
                ?>
                    <img src="<?php echo $bannerImage['sizes']['banner-image-small'] ?>" alt="<?php echo $bannerImage['alt'] ?>">
                <?php
            }
        ?>
	</figure>
    <?php 
        if($bannenCalloutPosition == 'left'){
            ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/callout_small.svg" alt="" class="callout_small">
            <?php
        }else{
            ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/callout_big.svg" alt="" class="callout_big">
            <?php
        }
    ?>
	<div class="banner_texts">
		<div class="banner_left">
			<h3><?php echo $bannerTitle ?></h3>
			<h4><?php echo $bannerTitleShadow ?></h4>
		</div>
        <?php
            if($bannerDesc){
                ?>
                    <div class="banner_right"><?php echo $bannerDesc ?></div>
                <?php
            }
        ?>
	</div>
</section>

<?php endif; ?>
