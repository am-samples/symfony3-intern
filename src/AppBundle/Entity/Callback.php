<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Класс для работы с формой
 */
class Callback
{
    /**
     * Поле комментария в форме
     */
    protected $comment;


    /**
     * @Assert\NotBlank()
     *
     * Имя отправителя - ФИО
     */
    protected $name;

    /**
     * @Assert\Email(
     *     message = "E-mail: '{{ value }}' не корректный!"
     * )
     * E-mail для обратной связи укзанный в форме
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