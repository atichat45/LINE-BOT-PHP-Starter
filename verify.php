<?php
$access_token = pwK9tqaMu8ISOWFikS9A52T5rGK3jn4ekv1jetgi1xt7zAwC4Qx2412tOmKqQ45OQl4xAiQ850jBpDbd209tUkxqBQ+ECrOzv59A5tXMAQQOPfjhNMxD+NfUZdJIiJSy9UXdkmC9NyylqCCswbWn+AdB04t89/1O/w1cDnyilFU;

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
