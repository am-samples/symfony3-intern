<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile as UploadedImage;
use Symfony\Component\HttpFoundation\File\File;


/**
 * @ORM\Entity
 * @ORM\Table(name="news")
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Заголовок
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * Тема
     *
     * @ORM\Column(type="string", length=128)
     */
    protected $slug;

    const SERVER_PATH_TO_IMAGE_FOLDER = 'assets/upload';
    /**
     * Фото новости
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $image;

    /**
     * Дата публикации
     *
     * @ORM\Column(type="datetime")
     */
    protected $publicationDate;

    /**
     * Содержание новости
     *
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * Cтатус новости
     *
     * @ORM\Column(type="boolean")
     */
    protected $active;

    /**
     * Описание новости
     *
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param mixed $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage(File $image)
    {
        $this->image = $image;
        $this->upload();
    }

    public function upload()
    {
        if (null === $this->getImage()) {
            return;
        }

        $this->getImage()->move(
            self::SERVER_PATH_TO_IMAGE_FOLDER,
            $this->getImage()->getClientOriginalName()
        );

        $this->image = self::SERVER_PATH_TO_IMAGE_FOLDER."/".$this->getImage()->getClientOriginalName();

        $this->setImage(null);
    }

    /**
     * Lifecycle callback to upload the file to the server
     */
//    public function lifecycleFileUpload()
//    {
//        $this->upload();
//    }
//
//    public function refreshUpdated()
//    {
//        return $this;
//    }

}