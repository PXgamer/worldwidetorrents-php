<?php

namespace pxgamer\WorldWideTorrents;

use PHPUnit\Framework\TestCase;

class TorrentTest extends TestCase
{
    public function testGetTorrentInfo()
    {
        $client = new Client();
        $torrent = new Torrent($client);
        $result = $torrent->getInfo(656);
        $this->assertTrue(is_array($result));
    }
}