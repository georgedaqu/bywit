<?php

// Theme support
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Remove Wordpres Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove default image sizes
add_image_size('thumbnail', false);
add_image_size('medium', false);
add_image_size('medium_large', false);
add_image_size('large', false);
remove_image_size('1536x1536');
remove_image_size('2048x2048');
// Add custom image sizes
add_image_size('hero-image', 1920, 1080, true);
add_image_size('portfolio-listing-image', 960, 800, true);
add_image_size('banner-image-big', 1920, 1080, true);
add_image_size('banner-image-small', 1920, 500, true);
add_image_size('team-image', 780, 820, true);

// Excerpt length
function wit_custom_excerpt_length($length){
	return 15;
}
add_filter('excerpt_length', 'wit_custom_excerpt_length', 999);
function wit_excerpt_more($more){
	return '';
}
add_filter('excerpt_more', 'wit_excerpt_more');

// Pagination
function pagination_bar($custom_query){
	$total_pages = $custom_query->max_num_pages;
	$big = 999999999;
	if ($total_pages > 1){
		$current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
			'base'			=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format'		=> '?paged=%#%',
			'current'		=> $current_page,
			'total'			=> $total_pages,
			'prev_text'		=> __('<em class="fal fa-angle-left"></em>'),
			'next_text'		=> __('<em class="fal fa-angle-right"></em>')
		));
	}
}
function w3reign_svg_mime_type( $mimes = array() ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'w3reign_svg_mime_type' );

// Options
if(function_exists('acf_add_options_page')){
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Portfolio Archive',
		'menu_title'	=> 'Portfolio Archive',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Team Archive',
		'menu_title'	=> 'Team Archive',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'News Archive',
		'menu_title'	=> 'News Archive',
		'parent_slug'	=> 'theme-general-settings',
	));
}

// Create shortcode.
function gallery($attrs){
    ob_start();
    set_query_var('gallery_attrs', $attrs);
    get_template_part('sections/section', 'gallery');
    return ob_get_clean();
}
add_shortcode('gallery_in', 'gallery');

// Display shortcode in admin area.
function wpso_custom_columns_head($defaults) {
    $defaults['shortcode']  = 'Shortcode';
    return $defaults;
}
add_filter('manage_gallery_posts_columns', 'wpso_custom_columns_head');


function wpso_custom_columns_content( $column_name, $post_ID ) {
    if ( 'shortcode' === $column_name ) {
        echo '[gallery_in id="' . $post_ID . '"]';
    }
}
add_action('manage_gallery_posts_custom_column', 'wpso_custom_columns_content', 10, 2);


?>