<?php

namespace AppBundle\Service;

use AppBundle\Entity\Callback;
use Doctrine\ORM\EntityManager;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Класс для работы с данными
 *
 * @param $callback
 */
class CallbackService
{
    protected $em;

    /**
     * DbService constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Метод сохранения данных
     *
     * @param $callback
     */
    public function save($callback)
    {
        $em = $this->em;
        $em->persist($callback);
        $em->flush();
    }

    public function showCallback()
    {
        $em = $this->em;
        $repo = $em->getRepository('AppBundle:Callback');
        $resQuery = $repo->findAll();

        return $resQuery;
    }
}