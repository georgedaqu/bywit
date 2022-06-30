<?php
/**
 * WIT functions and definitions
 *
 * @package WIT
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

$wit_inc_dir = get_template_directory() . '/inc';

// Array of files to include
$wit_includes = array(
	'/setup.php',
	//'/widgets.php',
	//'/enqueue.php',
	'/menus.php',
	'/post_types.php'
);

// Include files
foreach($wit_includes as $file){
	require_once $wit_inc_dir . $file;
}

?>