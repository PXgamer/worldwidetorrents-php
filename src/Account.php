<?php

namespace pxgamer\WorldWideTorrents;

/**
 * Class Torrent.
 */
class Account
{
    public $client;

    /**
     * Torrent constructor.
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
     * @param string $torrent_name
     * @param string $torrent_file
     * @param int    $category_id
     *
     * @return array|bool|mixed
     */
    public function upload($torrent_name, $torrent_file, $category_id = 39)
    {
        if (!isset($torrent_file, $torrent_name, $category_id)) {
            return false;
        }

        $content = [
            'name' => $torrent_name,
            'torrent_file' => $torrent_file,
            'category_id' => $category_id,
        ];

        return $this->client->post('/account/upload/', $content);
    }
}
