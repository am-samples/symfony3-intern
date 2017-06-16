<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Класс пунктов меню
 *
 * @ORM\Entity
 * @ORM\Table(name="items_menu")
 * @UniqueEntity("link")
 */
class Menu
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Название пункта меню
     *
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * Путь
     *
     * @ORM\Column(type="string", length=30, nullable=true, unique=true)
     */
    protected $link;

    /**
     *  Путь заданный пользователем в админке]
     *
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    protected $customLink;

    /**
     * Статус пункта меню
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $active;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
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
    public function getCustomLink()
    {
        return $this->customLink;
    }

    /**
     * @param mixed $customLink
     */
    public function setCustomLink($customLink)
    {
        $this->customLink = $customLink;
        return $this;
    }

}