
<?php if(get_row_layout() == 'portfolio_listing'): ?>

<?php

$sectionShadowTitle = get_sub_field('section_shadow_sub_title');
$sectionText = get_sub_field('section_text');
$sectionTitle = get_sub_field('section_title');

?>

<section class="portfolio">
	<div class="portfolio_captions">
		<h3 class="portfolio_caption">
			<strong><?php echo $sectionTitle ?></strong>
			<span><?php echo $sectionShadowTitle ?></span>
		</h3>
		<div class="portfolio_general_desc">
			<?php echo $sectionText ?>
		</div>
	</div>
	<div class="portfolio_items trans-all-4">
		<?php
			$args = array(
				'post_type' => 'portfolio',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'DESC',
			);
			$loop = new WP_Query($args);
		?>
		<?php while($loop->have_posts()): ?>
			<?php
				$loop->the_post();
				$portfolioIntro = get_field('intro');
				$portfolioLinkExternal = get_field('intro_link_external');
				$portfolioLinkText = get_field('intro_link_text');
				$portfolioLinkUrl = get_field('intro_link_url');
			?>
			<article>
				<div class="portfolio_texts">
					<h3 class="portfolio_title"><?php the_title() ?></h3>
					<div class="portfolio_desc">
						<?php echo $portfolioIntro; ?>
					</div>
					<div class="more">
						<?php
							if($$portfolioLinkExternal){
								?>
									<a href="<?php echo $portfolioLinkUrl; ?>" title="<?php echo $portfolioLinkText ?>" target="_blank">
										<span><?php echo $portfolioLinkText ?></span>
										<img src="<?php echo get_template_directory_uri(); ?>/images/read_more.svg" alt="">
									</a>
								<?php
							}elseif($portfolioLinkText){
								?>
									<a href="<?php the_permalink(); ?>" title="<?php echo $portfolioLinkText ?>">
										<span><?php echo $portfolioLinkText ?></span>
										<img src="<?php echo get_template_directory_uri(); ?>/images/read_more.svg" alt="">
									</a>
								<?php
							}
						?>
					</div>
				</div>
				<figure>
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'portfolio-listing-image') ?>" alt="<?php the_title() ?>">
				</figure>
			</article>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>

<?php endif; ?>
