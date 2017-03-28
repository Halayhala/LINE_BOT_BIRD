<?php
$access_token = 'DSSRBlj3iQ5KxgtXxC7+qKoYAdN04P3Rjp5/IdyysZXmVVv0ZBmihoLVvrbkDebO7k2/KevWvFIHNZdDaREeH6pcmeZu+08Shokjdo2bB6rLZwCKEMfVcocJxaiJ/8f+CkZVpnSH/X68hcOZJ087SAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
