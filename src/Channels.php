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

    /**
     * Creating new channel.
     *
     * * @param $name
     *
     * @return object
     * @throws \Exception
     */
    public function create($name)
    {
        $channels = new ChannelsLib();
        $channels->setToken($this->token);

        return $channels->create($name);
    }

    /**
     * Archiving channel.
     *
     * * @param $channelId
     *
     * @return object
     * @throws \Exception
     */
    public function archive($channelId)
    {
        $channels = new ChannelsLib();
        $channels->setToken($this->token);

        return $channels->archive($channelId);
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
        $channels = new ChannelsLib();
        $channels->setToken($this->token);

        return $channels->getList($excludeArchived);
    }
}