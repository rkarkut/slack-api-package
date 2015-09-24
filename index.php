<?php

require_once "vendor/autoload.php";
require_once "src/functions.php";

$client = new \Rkarkut\Slack\Client();

if ($client->api()->test()) {
    d("Api is working...");
}

$client->setToken('xoxp-11053018468-11053159107-11197597572-4eef803169');

if ($client->auth()->test()) {
    d("Auth is OK...");
}

//$result = $client->chat()->postMessage('TestMessagePackage', 'RadekBot');
//$result = $client->channels()->create("TestChannelNew");

//$result = $client->channels()->archive('C0B85HX18');

//$result = $client->channels()->getList();

dd($result);