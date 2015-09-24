<?php

require_once "vendor/autoload.php";
require_once "src/functions.php";

$client = new \Rkarkut\Slack\Client();

if ($client->api()->test()) {
    d("Api is working...");
}

$clientId = '11053018468.11070551088';
$clientSecret = 'fc9ea6d136b1984b7f34d8de62d8a7ac';
$code = $_GET['code'];
$redirectUrl = null;

$client->oauth($clientId, $clientSecret)->access($code, $redirectUrl);