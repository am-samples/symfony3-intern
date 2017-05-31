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
     * Статус изображения
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $del;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

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
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getDel()
    {
        return $this->del;
    }

    /**
     * @param mixed $delete
     */
    public function setDel($del)
    {
        $this->del = $del;
    }

}