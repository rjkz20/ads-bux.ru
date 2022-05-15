<?php
require_once 'configuration.php';

function kino($u){ 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $u); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36 OPR/74.0.3911.218'); 
curl_setopt($ch, CURLOPT_REFERER, 'https://kinopoiskapiunofficial.tech'); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'X-API-KEY:'.API_KEY,
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
$exec = curl_exec($ch); 
curl_close($ch); 
return $exec; 
}

?>