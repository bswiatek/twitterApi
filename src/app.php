<?php

use TwitterApp\Twitter;

require __DIR__ . '/../vendor/autoload.php';

$path = '../.twitter_php7_cred.json';
$jsonCredentials = file_get_contents($path);
$credentials = json_decode($jsonCredentials, true);

$twitter = new Twitter($credentials['key'], $credentials['secret']);

$twits = $twitter->fetchTwits('lewy_official', 10);
var_dump($twits);