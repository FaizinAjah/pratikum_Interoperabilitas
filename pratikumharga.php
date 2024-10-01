<?php

$url = 'https://jsonplaceholder.typicode.com/posts';

//inisialisasi curl
$ch = curl_init();


curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);
?>