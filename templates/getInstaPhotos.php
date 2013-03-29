<?php

// Supply a user id and an access token
$userid = "27175354";
$accessToken = "27175354.ab103e5.6b4d954979d041d39747688af11d37f6";

// Gets our data
function fetchData($url){
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     $result = curl_exec($ch);
     //print_r($result);
     curl_close($ch); 
     return $result;
}

// Pulls and parses data.
$result = fetchData("https://api.instagram.com/v1/tags/ivwedding/media/recent/?access_token=27175354.ab103e5.6b4d954979d041d39747688af11d37f6");
$result = json_decode($result);

?>