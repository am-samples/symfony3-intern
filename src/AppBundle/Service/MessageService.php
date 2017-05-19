<?php

namespace AppBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class MessageService
{
    protected $mailer;
    protected $twig;
    protected $sender;
    protected $recipient;

    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $twig, $sender, $recipient)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->sender = $sender;
        $this->recipient = $recipient;
    }

    public function send($callback)
    {
        $name = $callback->getName();
        $email = $callback->getEmail();
        $comment = $callback->getComment();

        $message = \Swift_Message::newInstance()
            ->setSubject('Письмо из формы обратной связи')
            ->setFrom($this->sender)
            ->setTo($this->recipient)
            ->setBody(
                $this->twig->render(
                'AppBundle:Emails:simple.html.twig',
                [
                    'name' => $name,
                    'email' => $email,
                    'comment' => $comment
                ]
            ), 'text/html');

        $this->mailer->send($message);
    }
}