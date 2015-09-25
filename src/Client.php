<?php

namespace Rkarkut\Slack;

class Client
{
    private $token = null;

    /**
     * Setting Auth token.
     *
     * * @param $token
     *
     * @throws \Exception
     */
    public function setToken($token)
    {
        if (empty($token)) {
            throw new \Exception("Token cannot be null.");
        }

        $this->token = $token;
    }

    /**
     * Getting Api class instance.
     *
     * @return Api
     */
    public function api()
    {
        return new Api($this->token);
    }

    /**
     * Getting Auth class instance.
     *
     * @return Auth
     */
    public function auth()
    {
        return new Auth($this->token);
    }

    /**
     * Getting Channels class instance.
     *
     * @return Channels
     */
    public function channels()
    {
        return new Channels($this->token);
    }

    /**
     * Getting Chat class instance.
     *
     * @return Chat
     */
    public function chat()
    {
        return new Chat($this->token);
    }

    /**
     * Getting Oauth class instance.
     *
     * * @param $clientId
     * @param $clientSecret
     *
     * @return Oauth
     */
    public function oauth($clientId, $clientSecret)
    {
        return new Oauth($clientId, $clientSecret);
    }
}