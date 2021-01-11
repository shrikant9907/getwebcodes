<?php
/* 
* Code to register a sidebar | Site - allprograms.tech 
*/
add_action( 'widgets_init', 'add_custom_sidebars',10, 0 ); 
function add_custom_sidebars() { 
  // Register new sidebar
  register_sidebar( array(
    'name'          => __( 'Right Sidebar', 'wordpress-theme' ),
    'description'   => 'It will display blog details page.',
    'id'            => 'right-sidebar-1',
    'before_widget' => '<div id="%1$s" class="col-md-3 widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));   
}  