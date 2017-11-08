<?php

namespace pxgamer\WorldWideTorrents;

use PHPUnit\Framework\TestCase;

class MailTest extends TestCase
{
    public function testGetMailStats()
    {
        $client = new Client();
        $mail = new Mail($client);
        $result = $mail->getStats(656);
        $this->assertTrue(is_array($result));
    }
}