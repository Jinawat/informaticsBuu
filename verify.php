<?php
$access_token = 'VVJHKnqcKEcuydtKxvYLSL90VRpYkXlKyxE0/Yvpqrl1nIRYG9ueRWjjJKx37IebZ05rx8RjHKg++ZGUzCjg+ckTLPcHrRIm40Wm1vjpoTaV9MksNW6CuQD0A6Fvq9/xWujJB0LsNpJ7/qqZSZ6ixgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
