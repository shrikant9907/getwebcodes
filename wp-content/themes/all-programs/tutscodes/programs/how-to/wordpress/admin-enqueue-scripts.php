<?php
/*
* Code to add stylesheet and script files in WordPress dashboard | Site: allprograms.tech
*/
add_action( 'admin_enqueue_scripts', 'admin_styles_scripts' );
function admin_styles_scripts() {
  // Add stylesheet
  wp_enqueue_style( 'admin-jquery-ui', get_stylesheet_directory_uri().'/css/jquery-ui.css' );
  wp_enqueue_style( 'admin-style', get_stylesheet_directory_uri().'/css/admin-style.css' );

  // Admin Scripts
  wp_enqueue_script( 'admin-scripts', get_stylesheet_directory_uri().'/js/admin-scripts.js', '20200820', true );
}