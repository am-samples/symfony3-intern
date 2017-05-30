<?php

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends Controller
{
    public function clientManager()
    {
        $clientManager = $this->container->get('app.database_service_news');
        return $clientManager;
    }
    /**
     * Отображение новостей
     *
     * @Route("/news", name="news")
     *
     */
    public function newsAction()

    {   $cm = $this->clientManager();
        $news = $cm->showNews();


        return $this->render('AppBundle:news:news.html.twig',[
            'news' => $news,
        ]);
    }

    /**
     * Отображение новостей
     *
     * @Route("/news/{id}", name="news_post")
     *
     */
    public function newsPostAction($id)
    {
        $cm = $this->clientManager();

        $news = $cm->showNewsById($id);

        return $this->render('AppBundle:news:news_post.html.twig',[
            'news' => $news,
        ]);
    }
}