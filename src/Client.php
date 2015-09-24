<?php

namespace Rkarkut\Slack;

class Client
{
    private $token = null;

    public function setToken($token)
    {
        if (empty($token)) {
            throw new \Exception("Token cannot be null.");
        }

        $this->token = $token;
    }

    public function api()
    {
        return new Api($this->token);
    }

    public function auth()
    {
        return new Auth($this->token);
    }

    public function channels()
    {
        return new Channels($this->token);
    }

    public function chat()
    {
        return new Chat($this->token);
    }

    public function oauth($clientId, $clientSecret)
    {
        return new Oauth($clientId, $clientSecret);
    }
}