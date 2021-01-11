<?php
/*
* Remove admin menu pages in WordPress  | Site - allprograms.tech
*/
add_action('admin_menu', 'remove_admin_menus');
function remove_admin_menus() { 
    $user  = wp_get_current_user();
    $userroles = $user->roles;
    if(in_array('administrator',$userroles)) { 
        remove_menu_page('options-general.php'); 
        remove_menu_page('profile.php'); 
        remove_menu_page('index.php'); 
    }
}  