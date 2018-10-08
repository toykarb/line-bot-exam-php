<?php
$access_token = '9dFJuMSOHv3AmbZbYrigGyvo3ltdPRk1JREPUDumm/xzjUQ/MTOrvpYXqC4ROq8ElOt9V/j0iW35Trpr9qqlMdy/Vucjg/nh44gISDQHlgxK3hjqNFZPXdHssA4OS2gg1Z1B2qBWT+pzM0XGwKF8pQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
