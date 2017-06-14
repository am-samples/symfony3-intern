<?php

namespace Tests\AppBundle\Service;

use AppBundle\Entity\Callback;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use AppBundle\Service\CallbackService;
use Doctrine\ORM\EntityManager;

class CallbackServiceTest extends WebTestCase
{
    public function test_save()
    {



        $save = $this->getMockBuilder(EntityManager::class)
            ->setMethods(['persist', 'flush'])
            ->disableOriginalConstructor()
            ->getMock();

        $save
            ->expects($this->once())
            ->method('persist');

        $callback = new Callback();
        $callback->setName = 'Alex Malozemov';
        $callback->setEmail = 'a.malozemov@tradedealer.ru';
        $callback->setComment = 'Test comment';

        $ex = new CallbackService($save);

        $ex->save($callback);
    }
}