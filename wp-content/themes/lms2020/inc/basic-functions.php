<?php 

/*
* Manage session in WordPress
* Commented because header is already send 
*/
add_action('init', 'start_session', 1);
function start_session() {
    if (!session_id()) {
        session_start();
    }
    generateDefaultPages();
    insertPostTaxonomies();
}

add_action('wp_logout', 'end_session');
add_action('wp_login', 'end_session');
add_action('end_session_action', 'end_session');
function end_session() {
    session_destroy();
}


/*
* Function to add post/page slug as class in body | Site - allprograms.tech
*/
add_filter( 'body_class', 'addPageSlugAsBodyClass' );
function addPageSlugAsBodyClass( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    		// Get Post/Page Slug
        $pageSlug = $post->post_name;    
        $classes[] = 'page-'.$pageSlug;
    }
    return $classes;
}

/* 
* Insert Pages.
*/
function generateDefaultPages() {

    $pages = array (
        'Landing Page',
        'Blog',
        'Privacy Policy',
        'Terms and Conditions',
        'Tools',
        'Quizzes',
        'Interview Questions',
        'Categories',
        'Sitemap',
    );
    if ($pages) {
  
      update_option('show_on_front', 'page'); 
  
      foreach($pages as $page) {
          $pageData = get_page_by_title( $page );
          if (!$pageData) {
  
            // Create new page
            $my_post = array(
              'post_title'    => wp_strip_all_tags( $page ),
              'post_content'  => '',
              'post_status'   => 'publish',
              'post_type'     => 'page',
            );
             
            // Insert page in Database
            wp_insert_post( $my_post );
  
          } else {
  
            // Front Page / Landing Page
            if ($page == 'Landing Page') {
              update_option('page_on_front', $pageData->ID);   
            }
  
            // Blog Page
            if ($page == 'Blog') {
              update_option('page_for_posts', $pageData->ID ); 
            }
          }
      }
    }
  }

/* 
* Insert Post Taxonomies.
*/
function insertPostTaxonomies() {

    $categories = array (
        'Blog',
        'News',
        'React Js',
        'Angular',
        'Python',
        'Django',
        'WordPress',
        'PHP',
        'Bootstrap',
        'jQuery',
        'JavaScript',
        'HTML and CSS',
        'Github',
        'Nginx',
    );
    if ($categories) {
      foreach($categories as $category) {
        wp_insert_term( $category, 'category', $args = array() );
      }
    }
}


/*
* Code to hide admin bar | Site - allprograms.tech
*/
add_filter('show_admin_bar', '__return_false'); 
  