<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ru/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Привет TradeDealer!', $crawler->filter('#container h1')->text());
    }
}
