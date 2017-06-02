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
     * @Route("/getJsonNews/{start}", name="JsonNews")
     *
     */
    public function getJsonNewsAction($start=0 , $end=10)
    {
        $cm = $this->clientManager();
        $news = $cm->getLimitNews($start, $end);
        $allNews = $cm->getNews();

        $news_arr = [];
        $liipm = $this->container->get('liip_imagine.cache.manager');
        foreach ($news as $k => $item){
            $news_arr[$k]["id"] = $item["id"];
            $news_arr[$k]["title"] = $item["title"];
            $news_arr[$k]["url"] = "news/".$item["url"];
            $news_arr[$k]["image"] = $item["image"];
            $news_arr[$k]["publication_date"] = $item["publication_date"];
            $news_arr[$k]["content"] = $item["content"];
            $news_arr[$k]["active"] = $item["active"];
            $news_arr[$k]["description"] = $item["description"];

            if ($item["image"] != null){
                $news_arr[$k]["thumbnails"] = $liipm->getBrowserPath($item["image"], 'my_thumb');
            }
        }
        $news_arr["all"] = count($allNews);

        return new JsonResponse($news_arr);
    }

    /**
     * Отображение новости
     *
     * @Route("/news/{url}", name="news_post")
     *
     */
    public function newsPostAction($url)
    {
        $cm = $this->clientManager();

        $news = $cm->getNewsByUrl($url);

        return $this->render('AppBundle:news:news_post.html.twig',[
            'news' => $news,
        ]);
    }
}