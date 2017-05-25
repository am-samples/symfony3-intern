<?php

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends Controller
{
    /**
     * Отображение новостей
     *
     * @Route("/news", name="news")
     *
     */
    public function newsAction()
    {
        return $this->render('AppBundle:news:news.html.twig');
    }
}