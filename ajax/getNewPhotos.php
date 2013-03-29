<?php

$key = $_POST['key'];
$type = $_POST['type'];
$last = $_POST['last'];

if ($key == 'getPhotos') {
	// Supply a user id and an access token
	$userid = "27175354";
	$accessToken = "27175354.ab103e5.6b4d954979d041d39747688af11d37f6";

	// Pulls and parses data.
	$result = fetchData("https://api.instagram.com/v1/tags/ivwedding/media/recent/?access_token=27175354.ab103e5.6b4d954979d041d39747688af11d37f6");
	$result = json_decode($result);

	$resultData = array();
	$index = 1;
	foreach ($result->data as $post) {
		if ($post->id != $last) {
			$resultData['photos'][$index]['thumbnail'] = $post->images->thumbnail->url;
			$resultData['photos'][$index]['image'] = $post->images->standard_resolution->url;
			$resultData['photos'][$index]['caption'] = 'From: ' . $post->user->username . ' - ' . $post->caption->text;
			$index++;
		} else {
			break;
		}
	}

	if (count($resultData['photos'])) {
		$resultData['count'] = count($resultData['photos']);
		$resultData['last'] = $result->data[0]->id;
		$resultData['status'] = 'true';
	} else {
		$resultData['status'] = 'false';
	}
		

	die(json_encode($resultData));
}

die('failed');

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