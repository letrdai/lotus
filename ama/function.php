<?php

define('THEME_URL', get_stylesheet_directory());
define('CORE',THEME_URL."/core");

require_one(CORE."/init.php");
function my_style(){
	wp_register_style('main_style', THEME_URL."/style.css", 'all');
	wp_enqueue_style('main_style');
}
add_action('wp_enqueue_scripts', 'my_style');
?>