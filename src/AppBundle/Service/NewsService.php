<?php

namespace AppBundle\Service;

use AppBundle\Entity\News;
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
        $repo = $em->getRepository('AppBundle:News');
        $resQuery = $repo->findAll();

        return $resQuery;
    }


    public function getNewsByUrl($url)
    {
        $em = $this->em;
        $repo = $em->getRepository('AppBundle:News');

        $resQuery = $repo->findBy(
            ['url' => $url]
        );

        return $resQuery;
    }
}