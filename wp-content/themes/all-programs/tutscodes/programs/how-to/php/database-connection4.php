<?php 
/*
* Connect with Database | Site - allprograms.tech
*/

$database = mysqli_select_db($connection, $databasename);  
if(!$database) {
    die('Unable to connect with Database.');
} 
?>