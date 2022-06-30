<?php if(get_row_layout() == 'news_listing'): ?>

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
				'post_type' => 'news',
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
				$excerpt = get_field('excerpt');
				$portfolioLinkUrl = get_field('intro_link_url');
				$remove_read_more = get_field('remove_read_more');
			?>
			<article>
				<div class="portfolio_texts">
					<h3 class="portfolio_title small"><?php the_title() ?></h3>
					<div class="portfolio_desc">
						<?php if ($excerpt) : ?>
							<?php echo $excerpt; ?>
						<?php endif; ?>
					</div>
					<time>
						<?php echo get_the_date(); ?>
					</time>
					<?php if ($remove_read_more) : ?>
					<?php else : ?>
						<div class="more">
							<a href="<?php the_permalink(); ?>" title="<?php echo $portfolioLinkText ?>">
								<span><?php echo $portfolioLinkText; ?></span>
								<img src="<?php echo get_template_directory_uri(); ?>/images/read_more.svg" alt="">
							</a>
						</div>
					<?php endif; ?>
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
