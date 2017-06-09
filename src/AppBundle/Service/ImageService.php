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
 * Класс для работы с картинками
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

    /**
     * Перемещение и формирование пути загруженного изображения.
     *
     * @param $news
     * @param $path
     * @return string|void
     */
    public function upload($news, $path)
    {
        if (null === $news->getFileImage()) {
            return;
        }

        $news->getFileImage()->move(
            $path."/".$news->getId(),
            $news->getFileImage()->getClientOriginalName()
        );

        $pathImage = "/".$path."/".$news->getId()."/".$news->getFileImage()->getClientOriginalName();

        $liipmg = $this->liipmg;
        $liipmg->getBrowserPath($pathImage, 'my_thumb');
        $liipmg->getBrowserPath($pathImage, 'post_img');

        return $pathImage;
    }
}