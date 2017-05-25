<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Callback;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       return $this->render('AppBundle:default:index.html.twig');
    }

    /**
     * @Route("/hello", name="hello_name")
     */
    public function helloAction(Request $request)
    {
        return $this->render('AppBundle:default:index.html.twig');

    }

    /**
     * @Route("/cms", name="cms")
     */
    public function cmsAction(Request $request)
    {
        return true;
    }

    /**
     * @Route("/orders", name="orders")
     */
    public function ordersAction(Request $request)
    {
        $clientManager = $mail = $this->container->get('app.database_service');
        $res = $clientManager->showCallback();

        return $this->render('AppBundle:callback:orders.html.twig', [
            'orders' => $res,
        ]);
    }

}
