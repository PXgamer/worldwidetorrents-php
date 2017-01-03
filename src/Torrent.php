<?php

namespace pxgamer\WorldWideTorrents;

/**
 * Class Torrent
 * @package pxgamer\WorldWideTorrents
 */
class Torrent
{
    public $client;

    /**
     * Torrent constructor.
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
     * @param null $torrentId
     * @return array|bool|mixed
     */
    public function getInfo($torrentId = null)
    {
        if (!is_numeric($torrentId)) {
            return false;
        }

        return $this->client->get('/torrent/?id='.$torrentId);
    }
}
