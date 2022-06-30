<?php get_header(); ?>

<?php if(have_rows('sections_team', 'option')): ?>
	<?php while(have_rows('sections_team', 'option')): the_row(); ?>
		<?php if(get_row_layout() == 'hero'): ?>
			<?php get_template_part('custom_widgets/widget','hero'); ?>
		<?php endif; ?>
		<?php if(get_row_layout() == 'intro'): ?>
			<?php get_template_part('custom_widgets/widget','intro'); ?>
		<?php endif; ?>
		<?php if(get_row_layout() == 'product_intro'): ?>
			<?php get_template_part('custom_widgets/widget','product_intro'); ?>
		<?php endif; ?>
		<?php if(get_row_layout() == 'banner'): ?>
			<?php get_template_part('custom_widgets/widget','banner'); ?>
		<?php endif; ?>
		<?php if(get_row_layout() == 'text_image'): ?>
			<?php get_template_part('custom_widgets/widget','text_image'); ?>
		<?php endif; ?>
		<?php if(get_row_layout() == 'team'): ?>
			<?php get_template_part('custom_widgets/widget','team'); ?>
		<?php endif; ?>
		<?php if(get_row_layout() == 'portfolio_listing_intro'): ?>
			<?php get_template_part('custom_widgets/widget','portfolio_listing_intro'); ?>
		<?php endif; ?>
		<?php if(get_row_layout() == 'portfolio_listing'): ?>
			<?php get_template_part('custom_widgets/widget','portfolio_listing'); ?>
		<?php endif; ?>
		<?php if(get_row_layout() == 'news_listing'): ?>
			<?php get_template_part('custom_widgets/widget','news_listing'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>