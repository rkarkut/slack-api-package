<?php

namespace Rkarkut\Slack\lib;

use Guzzle\Http\Client as GuzzleClient;

class Api extends Slack
{
    public function test()
    {
        $client = new GuzzleClient($this->url);
        $request = $client->get('/api/api.test');

        $response = $request->send();

        $status = $response->getStatusCode();

        if ($status !== 200) {
            throw new \Exception('Api not working!');
        }

        return true;
    }
}