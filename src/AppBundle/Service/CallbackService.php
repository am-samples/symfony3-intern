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
        $qb= $em->createQueryBuilder();
        $qb ->select('h.name, h.email, h.comment')
            ->from('AppBundle:Callback', 'h');
        $query = $qb->getQuery();
        $resQuery = $query->getArrayResult();

        return $resQuery;
    }
}