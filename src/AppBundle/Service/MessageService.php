<?php

namespace AppBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

/**
 * Класс отправки писем
 */
class MessageService
{
    protected $mailer;
    protected $twig;
    protected $kernel;

    /**
     * MessageService constructor.
     * @param \Swift_Mailer $mailer
     * @param \Twig_Environment $twig
     * @param $sender
     * @param $recipient
     */
    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $twig, $kernel)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->kernel = $kernel;
    }

    /**
     * Метод формирования и отправки сообщения на почту
     *
     * @param $callback
     */
    public function send($callback)
    {
        $name = $callback->getName();
        $email = $callback->getEmail();
        $comment = $callback->getComment();

        $sender = $this->kernel->getContainer()->getParameter('mailer_user');
        $recipient = $this->kernel->getContainer()->getParameter('mailer_recipient');

        $message = \Swift_Message::newInstance()
            ->setSubject('Письмо из формы обратной связи')
            ->setFrom($sender) //Убрать из сервисов => $this->container->getParameter('sender')
            ->setTo($recipient)
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