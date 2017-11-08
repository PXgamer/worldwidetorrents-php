<?php

namespace pxgamer\WorldWideTorrents;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetUserInfo()
    {
        $client = new Client();
        $user = new User($client);
        $result = $user->getInfo(656);
        $this->assertTrue(is_array($result));
    }

    public function testGetUserTorrents()
    {
        $client = new Client();
        $user = new User($client);
        $result = $user->getTorrents(656);
        $this->assertTrue(is_array($result));
    }
}