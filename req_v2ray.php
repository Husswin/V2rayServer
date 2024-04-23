<?php

#source = https://t.me/Learn_launch
#Author: @Drstripe

$url = 'https://kabiriteam.nl.subhost.site/DrApi/';
$token = 'Token';  #Put your token that you received from the @Authyourbot 

$data = array('token' => $token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpCode == 200) {
    $server_info = json_decode($response, true);
    echo "Server info received successfully:\n";
    print_r($server_info);
} else {
    if ($httpCode == 400) {
        echo "Bad request. Please check your data and try again.\n";
    } elseif ($httpCode == 401) {
        echo "Unauthorized. Please check your token.\n";
    } elseif ($httpCode == 404) {
        echo "Not found. The requested resource was not found on the server.\n";
    } elseif ($httpCode == 405) {
        echo "Method not allowed. Please check the HTTP method.\n";
    } elseif ($httpCode == 500) {
        echo "Internal server error. Please try again later.\n";
    } else {
        echo "An error occurred. HTTP Code: $httpCode\n";
    }
}
#source = https://t.me/Learn_launch
#Author: @Drstripe

curl_close($ch);
?>