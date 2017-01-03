<?php

namespace pxgamer\WorldWideTorrents;

/**
 * Class Mail.
 */
class Mail
{
    public $client;

    /**
     * Mail constructor.
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
    public function getStats($userId = null)
    {
        if (!is_numeric($userId)) {
            return false;
        }

        return $this->client->get('/mail/?id='.$userId);
    }
}
