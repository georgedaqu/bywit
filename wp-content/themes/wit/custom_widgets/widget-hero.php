
<?php if(get_row_layout() == 'hero'): ?>

<?php

$heroBg = get_sub_field('hero_background_image');
$heroMessage = get_sub_field('hero_message');
$heroBlockquote = get_sub_field('hero_blockquote');
$heroNoMargin = get_sub_field('no_margin') ? 'no_margin': '';

?>

<section class="hero <?php echo $heroNoMargin ?>">
	<figure class="bak">
		<img src="<?php echo $heroBg['sizes']['hero-image'] ?>" alt="<?php echo $heroBg['alt'] ?>">
	</figure>
	<div class="container">
        <?php 
            if($heroMessage){
                ?>
                    <div class="message padding">
                        <!-- <p>Our partners <strong>have</strong></p>
                        <p><strong>one thing</strong> in common.</p>
                        <p>They know something</p>
                        <p style="text-align: right;"><strong>you don't.</strong></p> -->
                        <?php echo $heroMessage ?>
                    </div>
                <?php
            }
        ?>
		<?php 
            if($heroBlockquote){
                ?>
                    <div class="blockquote_wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/quot.svg" alt="">
                    <blockquote>
                        <?php echo $heroBlockquote ?>
                    </blockquote>
                </div>
                <?php
            }
        ?>
		<div class="scroll_down">
			<a href="javascript:void(0);" title="Scroll Down">
				<svg viewBox="0 0 51 65" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M28.9456 50.663C15.0622 52.5517 2.12342 42.8248 0.234528 28.9428C-1.65436 15.0608 8.07342 2.12321 21.9568 0.234505C35.8401 -1.6542 48.7789 8.07264 50.6678 21.9546C52.5567 35.8366 42.8289 48.6798 28.9456 50.663ZM22.9953 7.97819C13.3619 9.30028 6.65648 18.1772 7.9787 27.8096C9.30093 37.442 18.1787 44.1469 27.8121 42.8248C37.4454 41.5027 44.1509 32.6258 42.8286 22.9934C41.5064 13.361 32.6286 6.65609 22.9953 7.97819Z" class="circle"></path>
					<path d="M24.6464 64.3536C24.8417 64.5488 25.1583 64.5488 25.3536 64.3536L28.5355 61.1716C28.7308 60.9763 28.7308 60.6597 28.5355 60.4645C28.3403 60.2692 28.0237 60.2692 27.8284 60.4645L25 63.2929L22.1716 60.4645C21.9763 60.2692 21.6597 60.2692 21.4645 60.4645C21.2692 60.6597 21.2692 60.9763 21.4645 61.1716L24.6464 64.3536ZM24.5 25L24.5 64L25.5 64L25.5 25L24.5 25Z" class="arrow"></path>
				</svg>
			</a>
		</div>
	</div>
</section>

<?php endif; ?>
