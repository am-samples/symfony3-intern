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

    public function showNews()
    {
        $sql = "SELECT `id`, `title`, `publication_date`, `content`, `description` FROM news";
        $em = $this->em;
        $query = $em->getConnection()->prepare($sql);
        $query->execute();
        $resQuery = $query->fetchAll();

        return $resQuery;
    }
}