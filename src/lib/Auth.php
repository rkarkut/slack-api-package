<?php

namespace Rkarkut\Slack\lib;

use Guzzle\Http\Client as GuzzleClient;

class Auth extends Slack
{
    /**
     * Testing Slack token.
     *
     * @return bool
     * @throws \Exception
     */
    public function test()
    {
        $params = array('token' => $this->getToken());

        $client = new GuzzleClient($this->url);
        $request = $client->post('/api/auth.test', null, $params);

        $response = $request->send();

        $status = $response->getStatusCode();

        if ($status !== 200) {
            throw new \Exception('Api not working!');
        }
        $result = (object) json_decode($response->getBody(true));

        if ($result->ok !== true) {
            throw new \Exception('Access denied.');
        }

        return true;
    }
}