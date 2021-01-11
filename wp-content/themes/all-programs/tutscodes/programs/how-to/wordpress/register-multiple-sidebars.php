<?php

/* 
* Code to register multiple sidebars in WordPress | Site - allprograms.tech 
*/
add_action( 'widgets_init', 'add_custom_sidebars',10, 0 ); 
function add_custom_sidebars() { 
    $sidebarsArray = array(
      'Left Sidebar', 
      'Right Sidebar', 
      'Footer Sidebar1', 
      'Footer Sidebar2', 
      'Footer Sidebar3', 
      'Footer Sidebar4', 
      'Footer Sidebar5'
    );

    // Update Sidebar options
    update_option('site_sidebars', $sidebarsArray);

    if ($sidebarsArray) {
        foreach($sidebarsArray as $sidebar) {
            register_sidebar( array(
                'name'          => __( $sidebar ),
                'description'   => 'Available in Header and/or Footer of the site.',
                'id'            => sanitize_title($sidebar),
                'before_widget' => '<div id="%1$s" class="custom-widget %2$s ' . sanitize_title($sidebar) . '">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="custom-widget-title">',
                'after_title'   => '</h3>',
            ));  
        }
    }
} 