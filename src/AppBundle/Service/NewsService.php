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
class NewsService
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

    public function getNews()
    {
        $em = $this->em;
        $qb= $em->createQueryBuilder();
        $qb ->select('h')
            ->from('AppBundle:News', 'h');
        $query = $qb->getQuery();
        $resQuery = $query->getArrayResult();

        return $resQuery;
    }

    public function showNewsBySlug($slug)
    {
        $em = $this->em;
        $qb= $em->createQueryBuilder();
        $qb ->select('h')
            ->from('AppBundle:News', 'h')
            ->where("h.slug='{$slug}'");
        $query = $qb->getQuery();
        $resQuery = $query->getArrayResult();

        return $resQuery;
    }
}