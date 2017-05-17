<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
//use AppBundle\Form\FormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;



class MailController extends Controller
{


    /**
     * @Route("/callback", name="callback_form")
     */

    public function callbackAction(Request $request)
    {
        $task = new Task();
//        $form = $this->createForm(FormType::class, $task);

        $form = $this->createFormBuilder($task)
            ->setAction($this->generateUrl('sendmail'))
            ->add('name', TextType::class, array(
                'label' => 'Имя: ',
                'attr'  => array('class' => 'form-control', 'placeholder' => 'Введите ваше имя...')
            ))

            ->add('email', EmailType::class, array(
                'label' => 'E-mail: ',
                'attr'  => array('class' => 'form-control', 'placeholder' => 'Введите ваш e-mail...')
            ))
            ->add('comment', TextareaType::class, array(
                'label' => 'Комментарий: ',
                'attr'  => array('class' => 'form-control', 'placeholder' => 'Можете добавить комментарий...')
            ))
            ->add('send', SubmitType::class, array(
                'label' => 'Отправить',
                'attr'  => array('class' => 'btn btn-primary', 'style' => 'margin-top: 10px;')
            ))
            ->getForm();


//        $validator = $this->get('validator');

//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $task = $form->getData();
//
//            return $this->redirectToRoute('task_success');
//        }

//        if ($request->isMethod('POST')) {
//            $form->submit($request->request->get($form->getName()));
//
//            if ($form->isSubmitted() && $form->isValid()) {
//                // perform some action...
//
//                return $this->redirectToRoute('task_success');
//            }
//        }

        return $this->render('AppBundle:callback:form.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/sendmail", name="sendmail")
     */

    public function sendmailAction(Request $request)
    {
        $form = $request->request->get('form');
        $name = $form['name'];
        $email = $form['email'];
        $comment = $form['comment'];
        $message = \Swift_Message::newInstance()
            ->setSubject('Test e-mail')
            ->setFrom($this->container->getParameter('mailer_user'))
            ->setTo($this->container->getParameter('mailer_recipient'))
            ->setBody(
                $this->renderView(
                    'AppBundle:Emails:simple.html.twig',
                    array(
                        'name' => $name,
                        'email' => $email,
                        'comment' => $comment
                    )
                ),
                'text/html'
            );

        $this->get('mailer')->send($message);

        return $this->redirectToRoute('task_success');
    }

    /**
     * @Route("/task_success", name="task_success")
     */
    public function task_successAction(Request $request)
    {
        return $this->render('AppBundle:callback:form_success.html.twig');
    }
}
