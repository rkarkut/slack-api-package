<?php

namespace Rkarkut\Slack\lib;

use Guzzle\Http\Client as GuzzleClient;

class Oauth extends Slack
{
    /**
     * Getting access to an application.
     *
     * * @param $clientId
     * @param $clientSecret
     * @param $code
     * @param $redirectUrl
     *
     * @return object
     * @throws \Exception
     */
    public function access($clientId, $clientSecret, $code, $redirectUrl)
    {
        $params = array(
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'code' => $code,
            'redirect_uri' => $redirectUrl
        );

        $client = new GuzzleClient($this->url);
        $request = $client->post('/api/oauth.access', null, $params);

        $response = $request->send();

        $status = $response->getStatusCode();

        if ($status !== 200) {
            throw new \Exception('Api not working!');
        }
        $result = (object) json_decode($response->getBody(true));

        if ($result->ok !== true) {
            throw new \Exception('Access denied.');
        }

        return $result;
    }
}