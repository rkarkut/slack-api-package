<?php

namespace Rkarkut\Slack;

use Rkarkut\Slack\lib\Oauth as OauthLib;

class Oauth
{
    private $clientId, $clientSecret;

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function access($code, $redirectUrl = null)
    {
        $auth = new OauthLib();
        return $auth->access($this->clientId, $this->clientSecret, $code, $redirectUrl);
    }
}