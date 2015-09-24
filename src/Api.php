<?php

namespace Rkarkut\Slack;

use Rkarkut\Slack\lib\Api as ApiLib;

class Api
{
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function test()
    {
        $api = new ApiLib();
        $api->setToken($this->token);

        return $api->test();
    }
}