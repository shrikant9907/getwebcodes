<?php
/*
* Code to limit the search result to specified post types | Site - allprograms.tech
*/
add_filter('pre_get_posts','searchfilter');
function searchfilter($query) {
  if ($query->is_search && !is_admin() ) {
    $query->set('post_type', array('post','program'));
  }
	return $query;
}