<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

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

//    public function showCallback()
//    {
//        $em = $this->getDoctrine()->getManager();
//        $query = $em->createQuery("SELECT `name`, `email`, `comment` FROM `hellotrade`");
//        return $query->getResult();
//    }
}
