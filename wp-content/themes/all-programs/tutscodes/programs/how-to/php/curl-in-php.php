<?php
/* 
* cURL GET reponse from URL | Site - allprograms.tech
*/

// API Url
$url = 'http://www.example.com/api/get-posts.php'; 

//  Initiate cURL
$ch = curl_init();

// Set URL
curl_setopt($ch, CURLOPT_URL,$url);

// If true it will return the response..
// If false it will print the response.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL $response will contains the output
$response = curl_exec($ch);

// Closing cURL
curl_close($ch);

// Decode the JSON response from the cURL
$result = json_decode($response);

// Display the response
print_r($result);