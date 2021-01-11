<?php
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
