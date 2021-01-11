<?php 
/*
* Create a database if not exists | Site - allprograms.tech
*/

$sql = "CREATE DATABASE IF NOT EXISTS $databasename"; 
$output = mysqli_query($connection, $sql); 
if(!$output) {
    die('Unable to create database');
}
?>