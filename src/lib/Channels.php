<?php

namespace Rkarkut\Slack\lib;

use Guzzle\Http\Client as GuzzleClient;

class Channels extends Slack
{
    /**
     * Creating a new channel.
     *
     * * @param $name
     *
     * @return object
     * @throws \Exception
     */
    public function create($name)
    {
        if (empty($this->token)) {
            throw new \Exception("Token cannot be null");
        }

        $params = array(
            'token' => $this->getToken(),
            'name' => $name
        );

        $client = new GuzzleClient($this->url);
        $request = $client->post('/api/channels.create', null, $params);

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

    /**
     * Archiving a channel.
     *
     * * @param $channelId
     *
     * @return object
     * @throws \Exception
     */
    public function archive($channelId)
    {
        if (empty($this->token)) {
            throw new \Exception("Token cannot be null");
        }

        $params = array(
            'token' => $this->getToken(),
            'channel' => $channelId
        );

        $client = new GuzzleClient($this->url);
        $request = $client->post('/api/channels.archive', null, $params);

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

    /**
     * Getting list of available channels.
     *
     * * @param int $excludeArchived
     *
     * @return object
     * @throws \Exception
     */
    public function getList($excludeArchived = 0)
    {
        if (empty($this->token)) {
            throw new \Exception("Token cannot be null");
        }

        $params = array(
            'token' => $this->getToken(),
            'exclude_archived' => $excludeArchived
        );

        $client = new GuzzleClient($this->url);
        $request = $client->post('/api/channels.list', null, $params);

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