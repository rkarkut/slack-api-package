<?php

namespace Rkarkut\Slack\lib;

abstract class Slack
{
    protected $url = "https://slack.com";
    protected $token = null;

    /**
     * @return null
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param null $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
}