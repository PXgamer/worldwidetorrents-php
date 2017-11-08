<?php

namespace pxgamer\WorldWideTorrents;

use PHPUnit\Framework\TestCase;

class GroupTest extends TestCase
{
    public function testGetGroupInfo()
    {
        $client = new Client();
        $group = new Group($client);
        $result = $group->getInfo(3);
        $this->assertTrue(is_array($result));
    }

    public function testGetGroupTorrents()
    {
        $client = new Client();
        $group = new Group($client);
        $result = $group->getTorrents(3);
        $this->assertTrue(is_array($result));
    }
}