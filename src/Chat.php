<?php

namespace Rkarkut\Slack;

use Rkarkut\Slack\lib\Chat as ChatLib;

class Chat
{
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function postMessage($text, $username = null)
    {
        $chat = new ChatLib();
        $chat->setToken($this->token);

        return $chat->postMessage($text, $username);
    }
}