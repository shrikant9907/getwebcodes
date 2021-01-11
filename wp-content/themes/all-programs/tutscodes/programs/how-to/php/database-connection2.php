<?php 
/*
 * Create a connection with server | Site - allprograms.tech
 */

global $connection; 
$connection = mysqli_connect($hostname,$dbusername,$dbpassword);
if(!$connection) {
    die('Unable to connect with server.');   
} 
?>