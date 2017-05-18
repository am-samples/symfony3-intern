<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Класс данных формы
 */
class Callback
{
    /**
     * Поле комментария в форме
     */
    protected $comment;


    /**
     * Имя отправителя - ФИО
     *
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * E-mail для обратной связи укзанный в форме
     *
     * @Assert\Email(
     *     message = "E-mail: '{{ value }}' не корректный!"
     * )
     */
    protected $email;

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