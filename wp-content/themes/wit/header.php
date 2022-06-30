<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scripts/css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/js/main.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
</head>
<body>

<div class="resp_menu_toggle">
	<div></div>
	<div></div>
	<div></div>
</div>

<div class="resp_menu_wrap">
	<?php
		wp_nav_menu([
			'theme_location'	=> 'header_menu',
			'menu'				=> 'header_menu',
			'container'			=> 'nav',
			'container_class'	=> '',
			'menu_class'		=> ''
		]);
	?>
</div>

<header>
	<div class="container">
		<div class="logo">
			<a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo(); ?>">
				<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
				<lottie-player src="<?php echo get_template_directory_uri(); ?>/images/lottie.json" background="transparent" speed="1" style="width: 42px; height: 42px;" loop autoplay></lottie-player>
				<img src="<?php echo get_template_directory_uri(); ?>/images/wit-pink.svg" alt="<?php echo get_bloginfo(); ?>">
			</a>
		</div>
		<div class="header_right">
			<?php
				wp_nav_menu([
					'theme_location'	=> 'header_menu',
					'menu'				=> 'header_menu', 
					'container'			=> 'nav',
					'container_class'	=> 'navigation',
					'menu_class'		=> 'nav'
				]);
			?>
			<!-- <div class="header_user trans-all-4">
				<a href="#" title="Login/Register">Login/Register</a>
			</div> -->
		</div>
	</div>
</header>