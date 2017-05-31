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
        $sql = "SELECT * FROM news";
        $em = $this->em;
        $query = $em->getConnection()->prepare($sql);
        $query->execute();
        $resQuery = $query->fetchAll();

        return $resQuery;
    }

    public function showNewsBySlug($slug)
    {
        $sql = "SELECT * FROM news WHERE slug='{$slug}'";
        $em = $this->em;
        $query = $em->getConnection()->prepare($sql);
        $query->execute();
        $resQuery = $query->fetchAll();

        return $resQuery;
    }
}