<?php
/*
* Code to insert pages in WordPress | Site - allprograms.tech 
*/

	// Array of page titles
  $pages = array (
      'Home',
      'About',
      'About Us',
      'Contact Us',
      'Blog',
  );

  if ($pages) {
    foreach($pages as $page) {

    		// Check already exists
        $pageData = get_page_by_title( $page );
        if (!$pageData) {

          // Insert page
          $args = array(
            'post_title'    => wp_strip_all_tags( $page ),
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
          );
           
          // Insert page in Database
          wp_insert_post( $args );
        }

    }
  }