<?php

namespace pxgamer\WorldWideTorrents;

/**
 * Class Group
 * @package pxgamer\WorldWideTorrents
 */
class Group
{
    public $client;

    /**
     * Group constructor.
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        if (is_null($client)) {
            $client = new Client();
        }
        $this->client = $client;

        if ($this->client->authKey) {
            return true;
        }

        return false;
    }

    /**
     * @param null $groupId
     * @return array|bool|mixed
     */
    public function getInfo($groupId = null)
    {
        if (!is_numeric($groupId)) {
            return false;
        }

        return $this->client->get('/group/info/?id='.$groupId);
    }

    /**
     * @param null $groupId
     * @return array|bool|mixed
     */
    public function getTorrents($groupId = null)
    {
        if (!is_numeric($groupId)) {
            return false;
        }

        return $this->client->get('/group/torrents/?id='.$groupId);
    }
}
