<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Класс работы с новостями
 *
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
     * @Assert\NotBlank()
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
     * Путь изображения новости в БД
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $image;

    /**
     * Изображение новости загружаемое в админке
     *
     */
    protected $fileImage;

    /**
     * Дата публикации
     *
     * @Assert\NotBlank()
     * @ORM\Column(type="datetime")
     */
    protected $publicationDate;

    /**
     * Содержание новости
     *
     * @Assert\NotBlank()
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * Cтатус новости
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $active;

    /**
     * Описание новости
     *
     * @Assert\NotBlank()
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * Поле статуса для принятия решения об удалении текущего изображения
     *
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
        return $this;
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
        return $this;
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
        return $this;
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
        return $this;
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
        return $this;
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
        return $this;
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
        return $this;
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
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileImage()
    {
        return $this->fileImage;
    }

    /**
     * @param mixed $fileImage
     */
    public function setFileImage($fileImage)
    {
        $this->fileImage = $fileImage;
        return $this;
    }

}