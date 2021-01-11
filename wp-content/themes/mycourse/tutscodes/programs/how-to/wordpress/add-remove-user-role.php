<?php
/* 
* Code for Add / Remove User role in WordPress | Site - allprograms.tech
*/
add_action('init','add_new_user_roles');
function add_new_user_roles() {
	// Add new role	
	add_role( 'admin', 'Admin', array( 'read' => true, 'level_7' => true ) );  

	// Remove role author
	if( get_role('author') ) {
	  remove_role( 'author' );
	}

	// Remove role contributor
	if( get_role('contributor') ){
	  remove_role( 'contributor' );
	}

	// Remove role subscriber
	if( get_role('subscriber') ){
	  remove_role( 'subscriber' );
	}
}