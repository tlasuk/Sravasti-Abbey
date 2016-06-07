<?php
function my_scripts() {
	wp_enqueue_script('my_scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
}
add_action('wp_enqueue_scripts', 'my_scripts');

function my_match_height_plugin() {
	wp_enqueue_script('my_match_height_plugin', get_stylesheet_directory_uri() . '/js/jquery.matchHeight-min.js');
}
add_action('wp_enqueue_scripts', 'my_match_height_plugin');

if ( ! function_exists( 'et_builder_add_main_elements' ) ) :
function et_builder_add_main_elements() {
require ET_BUILDER_DIR . 'main-structure-elements.php';
require 'main-modules.php';
}
endif;




?>