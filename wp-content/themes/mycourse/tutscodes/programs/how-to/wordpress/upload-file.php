<?php
/*
* Code to upload a file | Site - allprograms.tech 
*/
function istl_upload_file_php($file) {
  $output = array();
  if($file) { 
    $errors= array();
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp = $file['tmp_name'];
    $file_type = $file['type'];
    $file_ext=strtolower(end(explode('.',$file['name'])));

    // Allowed extensions
    $expensions= array("xls");

    if(in_array($file_ext,$expensions)=== false){
       $errors[]="Extension not allowed.";
    }

    if($file_size > 2097152) {
       $errors[]='File size should not be greater than 2 MB';
    }
    
    $upload_dir = wp_upload_dir();
    $upload_dir_path = $upload_dir['basedir'];   

    if(empty($errors)==true) {
        move_uploaded_file($file_tmp, $upload_dir_path."/xls-files/".$file_name);
        $output['error'] = 0;
        $output['attachment_id'] = 0; 
        $output['file_path'] = $upload_dir_path."/xls-files/".$file_name;    
        $output['file_url'] = '';   
    } else {
        $output['error'] = 1;
        $output['error_message'] = $errors;
    } 
  }  
  return $output; 
}
