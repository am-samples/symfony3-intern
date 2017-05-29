<?php

namespace AppBundle\Service;

use AppBundle\Entity\News;
use Doctrine\ORM\EntityManager;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

/**
 * Класс для работы с данными
 *
 * @param $callback
 */
class ImageService
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

    const SERVER_PATH_TO_IMAGE_FOLDER = 'assets/upload';

    public function upload($news)
    {
        if (null === $news->getImage()) {
            return;
        }

        $news->getImage()->move(
            self::SERVER_PATH_TO_IMAGE_FOLDER."/".$news->getId(),
            $news->getImage()->getClientOriginalName()
        );

        $pathImage = self::SERVER_PATH_TO_IMAGE_FOLDER."/".$news->getId()."/".$news->getImage()->getClientOriginalName();


        return $pathImage;
    }
}