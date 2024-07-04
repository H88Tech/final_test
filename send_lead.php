<?php

$apiKey = 'f8a5e850e2003da8b65ff6103f8997ca';
$url = 'http://smileteethpro.online/api/v1/Lead';

$data = [
    "firstName" => "Иван",
    "lastName" => "Иванов",
    "phoneNumber" => "+71234567890", // Международный формат
    "emailAddress" => "ivan@example.com"
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'X-Api-Key: ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if ($response === FALSE) {
    die('Error: ' . curl_error($ch));
}

curl_close($ch);

var_dump($response);