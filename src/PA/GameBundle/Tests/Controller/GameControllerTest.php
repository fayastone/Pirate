<?php

namespace PA\GameBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GameControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
    }

}
