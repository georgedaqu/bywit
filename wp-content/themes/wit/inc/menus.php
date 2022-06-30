<?php

// Register menus
function wit_register_nav_menu(){
	register_nav_menu('header_menu', 'Header Menu');
}
add_action('after_setup_theme', 'wit_register_nav_menu');

?>