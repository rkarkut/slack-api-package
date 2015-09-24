<?php

namespace Rkarkut\Slack;

use Rkarkut\Slack\lib\Channels as ChannelsLib;

class Channels
{
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function create($name)
    {
        $channels = new ChannelsLib();
        $channels->setToken($this->token);

        return $channels->create($name);
    }

    public function archive($channelId)
    {
        $channels = new ChannelsLib();
        $channels->setToken($this->token);

        return $channels->archive($channelId);
    }

    public function getList($excludeArchived = 0)
    {
        $channels = new ChannelsLib();
        $channels->setToken($this->token);

        return $channels->getList($excludeArchived);
    }
}