<?php

namespace Tests\AppBundle\Service;

use AppBundle\Entity\Callback;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use AppBundle\Service\MessageService as MsgService;
use Swift_Mailer;

class MessageServiceTest extends WebTestCase
{

    public function test_send()
    {

        $client = self::createClient();

        $mailer = $this->getMockBuilder(Swift_Mailer::class)
            ->setMethods(['send'])
            ->disableOriginalConstructor()
            ->getMock();

        $mailer
            ->expects($this->once())
            ->method('send');

        $twig = $client->getContainer()->get('twig');

        $callback = new Callback();
        $callback->setName = 'Alex Malozemov';
        $callback->setEmail = 'a.malozemov@tradedealer.ru';
        $callback->setComment = 'Test comment';

        $msg = new MsgService($mailer, $twig, 'debug@tradedealer.ru', 'a.malozemov@tradedealer.ru');

        $msg->send($callback);

    }
}