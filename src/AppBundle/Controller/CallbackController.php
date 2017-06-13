<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Callback;
use AppBundle\Form\FormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

class CallbackController extends Controller
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

            $mail = $this->container->get('app.message');
            $mail->send($callback);

            $form_data = $this->container->get('app.database_callback');
            $form_data->save($callback);

            return $this->redirectToRoute('callback_success');
        }

        $locale = $request->getLocale();

        return $this->render('AppBundle:callback:form.html.twig', [
            'form' => $form->createView(),
            'locale' => $locale,
        ]);
    }

    /**
     * Thank you page.
     *
     * @Route("/callback_success", name="callback_success")
     *
     */
    public function callbackSuccessAction(Request $request)
    {
        return $this->render('AppBundle:callback:form_success.html.twig');
    }

    /**
     * @Route("/callback_list", name="callback_list")
     */
    public function listAction(Request $request)
    {
        $clientManager = $mail = $this->container->get('app.database_callback');
        $res = $clientManager->showCallback();

        return $this->render('AppBundle:callback:list.html.twig', [
            'orders' => $res,
        ]);
    }

}