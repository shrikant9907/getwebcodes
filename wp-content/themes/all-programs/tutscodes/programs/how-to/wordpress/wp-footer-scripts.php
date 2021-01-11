<?php
/*
* Add Scripts and Localize Script in WP Footer | Site - allprograms.tech
*/
add_action('wp_footer','add_scripts_in_footer');
function add_scripts_in_footer() {   
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri().'/js/custom-script.js' );     
}  