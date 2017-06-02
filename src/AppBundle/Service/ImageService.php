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

    public function upload($news, $path)
    {
        if (null === $news->getImg()) {
            return;
        }

        $news->getImg()->move(
            $path."/".$news->getId(),
            $news->getImg()->getClientOriginalName()
        );

        $pathImage = "/".$path."/".$news->getId()."/".$news->getImg()->getClientOriginalName();

        $liipmg = $this->liipmg;
        $liipmg->getBrowserPath($pathImage, 'my_thumb');
        $liipmg->getBrowserPath($pathImage, 'post_img');

        return $pathImage;
    }
}