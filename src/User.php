<?php

namespace pxgamer\WorldWideTorrents;

/**
 * Class User.
 */
class User
{
    public $client;

    /**
     * User constructor.
     *
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
     * @param null $userId
     *
     * @return array|bool|mixed
     */
    public function getInfo($userId = null)
    {
        if (!is_numeric($userId)) {
            return false;
        }

        return $this->client->get('/user/?id='.$userId);
    }

    /**
     * @param null $userId
     *
     * @return array|bool|mixed
     */
    public function getTorrents($userId = null)
    {
        if (!is_numeric($userId)) {
            return false;
        }

        return $this->client->get('/user/torrents/?id='.$userId);
    }
}
