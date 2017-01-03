<?php

use pxgamer\WorldWideTorrents;

class MainTest extends PHPUnit_Framework_TestCase
{
    // Initialisation Tests for the classes
    public function testCanBeInitialised()
    {
        $client = new WorldWideTorrents\Client();
        $this->assertInstanceOf(WorldWideTorrents\Client::class, $client);
    }

    public function testGroupCanBeInitialised()
    {
        $client = new WorldWideTorrents\Client();
        $test = new WorldWideTorrents\Group($client);
        $this->assertInstanceOf(WorldWideTorrents\Group::class, $test);
    }

    public function testMailCanBeInitialised()
    {
        $client = new WorldWideTorrents\Client();
        $test = new WorldWideTorrents\Mail($client);
        $this->assertInstanceOf(WorldWideTorrents\Mail::class, $test);
    }

    public function testTorrentCanBeInitialised()
    {
        $client = new WorldWideTorrents\Client();
        $test = new WorldWideTorrents\Torrent($client);
        $this->assertInstanceOf(WorldWideTorrents\Torrent::class, $test);
    }

    public function testUserCanBeInitialised()
    {
        $client = new WorldWideTorrents\Client();
        $test = new WorldWideTorrents\User($client);
        $this->assertInstanceOf(WorldWideTorrents\User::class, $test);
    }

    // Group Class Tests
    public function testGetGroupInfo()
    {
        $client = new WorldWideTorrents\Client();
        $group = new WorldWideTorrents\Group($client);
        $result = $group->getInfo(3);
        $this->assertTrue(is_array($result));
    }

    public function testGetGroupTorrents()
    {
        $client = new WorldWideTorrents\Client();
        $group = new WorldWideTorrents\Group($client);
        $result = $group->getTorrents(3);
        $this->assertTrue(is_array($result));
    }

    // Mail Class Tests
    public function testGetMailStats()
    {
        $client = new WorldWideTorrents\Client();
        $mail = new WorldWideTorrents\Mail($client);
        $result = $mail->getStats(656);
        $this->assertTrue(is_array($result));
    }

    // Torrent Class Tests
    public function testGetTorrentInfo()
    {
        $client = new WorldWideTorrents\Client();
        $torrent = new WorldWideTorrents\Torrent($client);
        $result = $torrent->getInfo(656);
        $this->assertTrue(is_array($result));
    }

    // User Class Tests
    public function testGetUserInfo()
    {
        $client = new WorldWideTorrents\Client();
        $user = new WorldWideTorrents\User($client);
        $result = $user->getInfo(656);
        $this->assertTrue(is_array($result));
    }

    public function testGetUserTorrents()
    {
        $client = new WorldWideTorrents\Client();
        $user = new WorldWideTorrents\User($client);
        $result = $user->getTorrents(656);
        $this->assertTrue(is_array($result));
    }
}
