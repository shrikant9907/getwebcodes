<?php
/* 
* cURL GET reponse from URL function | Site - allprograms.tech
*/
$url = 'http://www.example.com/api/get-posts.php'; 
function getResponseCurl($url, $returnTransfer = true) {
	$result = '';
	if ($url) {
		$ch = curl_init();
   	curl_setopt($ch, CURLOPT_URL,$url);
  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, $returnTransfer);
		$response = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($response);
	}
	return $result;
}
