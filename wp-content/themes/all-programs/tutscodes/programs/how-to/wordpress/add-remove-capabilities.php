<?php
/* 
* Code for add or remove users capabilites | Site - allprograms.tech
*/
add_action('admin_init', 'apt_user_capabilities');
function apt_user_capabilities() {
    // Admin is our custom user role
    $adminrole = get_role( 'admin' );

    // Remove users capabilites
    $adminrole->remove_cap( 'manage_options' );  
    $adminrole->remove_cap( 'delete_user' );    
    $adminrole->remove_cap( 'remove_user' );     

    // Add users capabilites   
    $adminrole->add_cap( 'upload_files' );         
    $adminrole->add_cap( 'delete_posts' );              
    $adminrole->add_cap( 'edit_others_posts' );              
    $adminrole->add_cap( 'edit_others_pages' );              
    $adminrole->add_cap( 'edit_posts' );              
    $adminrole->add_cap( 'edit_published_posts' );              
}  