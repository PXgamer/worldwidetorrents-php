<?php

namespace pxgamer\WorldWideTorrents;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    // Initialisation Tests for the classes
    public function testCanBeInitialised()
    {
        $client = new Client();
        $this->assertInstanceOf(Client::class, $client);
    }

    public function testGroupCanBeInitialised()
    {
        $client = new Client();
        $test = new Group($client);
        $this->assertInstanceOf(Group::class, $test);
    }

    public function testMailCanBeInitialised()
    {
        $client = new Client();
        $test = new Mail($client);
        $this->assertInstanceOf(Mail::class, $test);
    }

    public function testTorrentCanBeInitialised()
    {
        $client = new Client();
        $test = new Torrent($client);
        $this->assertInstanceOf(Torrent::class, $test);
    }

    public function testUserCanBeInitialised()
    {
        $client = new Client();
        $test = new User($client);
        $this->assertInstanceOf(User::class, $test);
    }

    public function testAccountCanBeInitialised()
    {
        $client = new Client();
        $test = new Account($client);
        $this->assertInstanceOf(Account::class, $test);
    }

    // Group Class Tests
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

    // Mail Class Tests
    public function testGetMailStats()
    {
        $client = new Client();
        $mail = new Mail($client);
        $result = $mail->getStats(656);
        $this->assertTrue(is_array($result));
    }

    // Torrent Class Tests
    public function testGetTorrentInfo()
    {
        $client = new Client();
        $torrent = new Torrent($client);
        $result = $torrent->getInfo(656);
        $this->assertTrue(is_array($result));
    }

    // User Class Tests
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
