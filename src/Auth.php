<?php

namespace Rkarkut\Slack;

use Rkarkut\Slack\lib\Auth as AuthLib;

class Auth
{
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function test()
    {
        $auth = new AuthLib();
        $auth->setToken($this->token);

        return $auth->test();
    }
}