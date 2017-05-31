<?php

namespace AppBundle\Controller;

use AppBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

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
    {
        return $this->render('AppBundle:news:news.html.twig');
    }

    /**
     * Отображение новостей Json
     *
     * @Route("/getJsonNews", name="JsonNews")
     *
     */
    public function getJsonNewsAction()
    {
        $cm = $this->clientManager();
        $news = $cm->getNews();

        $liipm = $this->container->get('liip_imagine.cache.manager');
        foreach ($news as $k => $item) {
            if ($item["image"] != null){
                $news[$k]["thumbnails"] = $liipm->getBrowserPath($item["image"], 'my_thumb');
            }
            $news[$k]["slug"] = "news/".$item["slug"];
        }

        return new JsonResponse($news);
    }

    /**
     * Отображение новости
     *
     * @Route("/news/{slug}", name="news_post")
     *
     */
    public function newsPostAction($slug)
    {
        $cm = $this->clientManager();

        $news = $cm->showNewsBySlug($slug);

        return $this->render('AppBundle:news:news_post.html.twig',[
            'news' => $news,
        ]);
    }
}