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
        $repo = $em->getRepository('AppBundle:News');
        $resQuery = $repo->findAll();

        return $resQuery;
    }

    public function showNewsBySlug($slug)
    {
        $em = $this->em;
        $repo = $em->getRepository('AppBundle:News');

        $resQuery = $repo->findBy(
            ['slug' => $slug]
        );

        return $resQuery;
    }
}