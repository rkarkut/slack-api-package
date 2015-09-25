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

    /**
     * Testing Slack authorization token.
     *
     * @return bool
     * @throws \Exception
     */
    public function test()
    {
        $auth = new AuthLib();
        $auth->setToken($this->token);

        return $auth->test();
    }
}