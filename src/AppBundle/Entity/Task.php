<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{
    protected $task;

    /**
     * @Assert\NotBlank()
     */
    public function name()
    {
        return $this->task;
    }

    /**
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    public function email()
    {
        return $this->task;
    }


    /**
     * @Assert\NotBlank()
     */
    public function comment()
    {
        return $this->task;
    }

    public function send()
    {
        return true;
    }

}