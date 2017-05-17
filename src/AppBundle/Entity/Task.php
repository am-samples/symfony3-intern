<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{

    protected $task;
    protected $comment;


    /**
     * @Assert\NotBlank()
     */
    protected $name;

    /**
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
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

}