<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Класс данных формы
 *
 * @ORM\Entity
 * @ORM\Table(name="hellotrade")
 */
class Callback
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Имя отправителя - ФИО
     *
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * E-mail для обратной связи укзанный в форме
     *
     * @ORM\Column(type="string", length=100)
     * @Assert\Email(
     *     message = "E-mail: '{{ value }}' не корректный!"
     * )
     */
    protected $email;

    /**
     * Поле комментария в форме
     *
     * @ORM\Column(type="string", length=300)
     */
    protected $comment;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

}