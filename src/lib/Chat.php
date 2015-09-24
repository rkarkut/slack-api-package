<?php

namespace Rkarkut\Slack\lib;

use Guzzle\Http\Client as GuzzleClient;

class Chat extends Slack
{
    public function postMessage($text, $username = 'BOT')
    {
        $params = array(
            'token' => $this->getToken(),
            'channel' => '#random',
            'text' => $text,
            'username' => $username
        );

        $client = new GuzzleClient($this->url);
        $request = $client->post('/api/chat.postMessage', null, $params);

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
