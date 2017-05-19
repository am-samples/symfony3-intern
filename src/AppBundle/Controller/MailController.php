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

            $mail = $this->container->get('app.message_service');
            $mail->send($callback);

            $form_data = $this->container->get('app.database_service');
            $form_data->save($callback);

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
