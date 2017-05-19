<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MessageServiceTest extends WebTestCase
{
    public function testSend()
    {

        $client = self::createClient();

        $message = $this->getMockBuilder('\Swift_Mailer', 'send')
            ->disableOriginalConstructor()
            ->getMock();

        $client->getContainer()->set('mailer', $message);

        $srv = static::createClient();
        $srv->getContainer()->get('app.message_service');
//        $this->assertEquals($message, $srv->request());

//        $this->assertTrue($message->concreteMethod('send'));


//        $me = $this->getMock('MessageService', array('send'));

//        $message->expects($this->once())->method('send');
//        $message->process();

    }
}