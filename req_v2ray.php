<?php

#source = https://t.me/Learn_launch
#Author: @Drstripe

$url = 'https://kabiriteam.nl.subhost.site/Api';
$data = [
    'number' => '09353947285',
    #It is better not to change this, but if you change it, there will be no problem👇🏻
    'жетон' => 'Zv9EakふーんXuV7+_!ks)_!nyBG3p', 
    'token' => 'PtzPAIIUqngJ5vaHM49apfxQobhKLy9EjgmBVurk7G6WjGFDvuNYSxAyO10E8otq8DKki' // Put your token that you received from the @authorizeu_bot
];
$headers = [
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'Connection: keep-alive'
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($response === false) {
    echo "Error sending request to server or invalid Token";
} else {
    $responseData = json_decode($response, true);
    if ($responseData !== null) {
        echo json_encode($responseData, JSON_UNESCAPED_UNICODE);
    } else {
        echo "Invalid JSON response from server";
    }
}

#source = https://t.me/Learn_launch
#Author: @Drstripe

curl_close($ch);
?>
