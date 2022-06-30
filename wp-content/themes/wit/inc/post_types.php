<?php

// Team post type
function team_post_type(){
	register_post_type('team', [
		'label'  => null,
		'labels' => [
			'name'				=> 'Team',
			'singular_name'		=> 'Team',
			'add_new'			=> 'Add Team Member',
			'add_new_item'		=> 'Add Team Member',
			'edit_item'			=> 'Edit Team Member',
			'new_item'			=> 'New Team Member',
			'view_item'			=> 'Watch Team Member',
			'search_items'		=> 'Search Team Member',
			'not_found'			=> 'Not found',
		],
		'description'		=> 'Post for Team',
		'public'			=> true,
		'show_in_menu'		=> true,
		'show_in_rest'		=> true,
		'rest_base'			=> true,
		'menu_position'		=> true,
		'menu_icon'			=> 'dashicons-admin-users',
		'hierarchical'		=> true,
		'supports'			=> ['title', 'thumbnail', 'editor'],
		'taxonomies'		=> [],
		'has_archive'		=> true,
		'rewrite'			=> true,
		'query_var'			=> true,
	]);
}
add_action('init', 'team_post_type');

// Portfolio post type
function portfolio_post_type(){
	register_post_type('portfolio', [
		'label'  => null,
		'labels' => [
			'name'				=> 'Portfolio',
			'singular_name'		=> 'Portfolio',
			'add_new'			=> 'Add Portfolio Item',
			'add_new_item'		=> 'Add Portfolio Item',
			'edit_item'			=> 'Edit Portfolio Item',
			'new_item'			=> 'New Portfolio Item',
			'view_item'			=> 'Watch Portfolio Item',
			'search_items'		=> 'Search Portfolio Item',
			'not_found'			=> 'Not found',
		],
		'description'		=> 'Post for Portfolio',
		'public'			=> true,
		'show_in_menu'		=> true,
		'show_in_rest'		=> true,
		'rest_base'			=> true,
		'menu_position'		=> true,
		'menu_icon'			=> 'dashicons-portfolio',
		'hierarchical'		=> true,
		'supports'			=> ['title', 'thumbnail', 'editor'],
		'taxonomies'		=> [],
		'has_archive'		=> true,
		'rewrite'			=> true,
		'query_var'			=> true,
	]);
}
add_action('init', 'portfolio_post_type');

// News post type
function news_post_type(){
	register_post_type('news', [
		'label'  => null,
		'labels' => [
			'name'				=> 'News',
			'singular_name'		=> 'News',
			'add_new'			=> 'Add News Item',
			'add_new_item'		=> 'Add News Item',
			'edit_item'			=> 'Edit News Item',
			'new_item'			=> 'New News Item',
			'view_item'			=> 'Watch News Item',
			'search_items'		=> 'Search News Item',
			'not_found'			=> 'Not found',
		],
		'description'		=> 'Post for News',
		'public'			=> true,
		'show_in_menu'		=> true,
		'show_in_rest'		=> true,
		'rest_base'			=> true,
		'menu_position'		=> true,
		'menu_icon'			=> 'dashicons-text-page',
		'hierarchical'		=> true,
		'supports'			=> ['title', 'thumbnail', 'editor'],
		'taxonomies'		=> [],
		'has_archive'		=> true,
		'rewrite'			=> true,
		'query_var'			=> true,
	]);
}
add_action('init', 'news_post_type');

function gallery_post_type(){
    register_post_type('gallery', [
		'label'  => null,
		'labels' => [
			'name'				=> 'Gallery',
			'singular_name'		=> 'Gallery',
			'add_new'			=> 'Add Gallery Item',
			'add_new_item'		=> 'Add Gallery Item',
			'edit_item'			=> 'Edit Gallery Item',
			'new_item'			=> 'New Gallery Item',
			'view_item'			=> 'Watch Gallery Item',
			'search_items'		=> 'Search Gallery Item',
			'not_found'			=> 'Not found',
		],
		'public' 		=> true,
		'has_archive' 	=> true,
		'hierarchical' 	=> false,
		'menu_icon' 	=> 'dashicons-images-alt2',
		'show_in_rest' 	=> true,
		'supports' 		=> array('title', 'custom-fields'),
	]);
}
add_action('init', 'gallery_post_type');

?>