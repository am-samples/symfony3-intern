<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Callback;
use AppBundle\Form\FormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

class MailController extends Controller
{

    /**
     * Создание формы и обработка данных (отправка, валидация)
     *
     * @Route("/callback", name="callback_form")
     *
     */
    public function callbackAction(Request $request)
    {
        $callback = new Callback();
        $form = $this->createForm(FormType::class, $callback);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $callback = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setSubject('Письмо из формы обратной связи')
                ->setFrom($this->container->getParameter('mailer_user'))
                ->setTo($this->container->getParameter('mailer_recipient'))
                ->setBody(
                    $this->renderView(
                        'AppBundle:Emails:simple.html.twig',
                        [
                            'name' => $callback->getName(),
                            'email' => $callback->getEmail(),
                            'comment' => $callback->getComment()
                        ]
                    ),
                    'text/html'
                );

            $this->get('mailer')->send($message);

            $em = $this->getDoctrine()->getManager();
            $em->persist($callback);
            $em->flush();

            return $this->redirectToRoute('task_success');
        }

        return $this->render('AppBundle:callback:form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Thank you page.
     *
     * @Route("/task_success", name="task_success")
     *
     */
    public function taskSuccessAction(Request $request)
    {
        return $this->render('AppBundle:callback:form_success.html.twig');
    }

}
