<?php

// PARAMETRI DA MODIFICARE
$WEBHOOK_URL = 'http://lpozzi.it/TelegramBot/PlatoonConvocazioni//execute.php';
$BOT_TOKEN = '402367638:AAGD_12tu7_KDmSokciDBpvuYbwv8L7pUco';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
$method = 'setWebhook';
$parameters = array('url' => $WEBHOOK_URL);
$url = $API_URL . $method. '?' . http_build_query($parameters);
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = curl_exec($handle);
print_r($result);

//PlatoonConvocazioni
//PlatoonConvocazioni_bot

//tg://resolve?domain=PlatoonConvocazioni_bot
//t.me/PlatoonConvocazioni_bot

//402367638:AAGD_12tu7_KDmSokciDBpvuYbwv8L7pUco