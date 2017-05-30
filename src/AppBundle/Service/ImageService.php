<?php

namespace AppBundle\Service;

use AppBundle\Entity\News;
use Doctrine\ORM\EntityManager;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Liip\ImagineBundle\DependencyInjection\LiipImagineExtension;
use Liip\ImagineBundle\LiipImagineBundle;
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
    protected $liipmg;

    /**
     * DbService constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em, $liipmg)
    {
        $this->em = $em;
        $this->liipmg = $liipmg;
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

        $pathImage = "/".self::SERVER_PATH_TO_IMAGE_FOLDER."/".$news->getId()."/".$news->getImage()->getClientOriginalName();

        $liipmg = $this->liipmg;
        $liipmg->getBrowserPath($pathImage, 'my_thumb');
        $liipmg->getBrowserPath($pathImage, 'post_img');

        return $pathImage;
    }
}