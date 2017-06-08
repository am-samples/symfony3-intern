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
     * @Route("/news_all", name="news")
     *
     */
    public function newsAction(Request $request)
    {
        $locale = "/".$request->getLocale();
        return $this->render('AppBundle:news:news.html.twig',[
            'locale' => $locale,
        ]);
    }

    /**
     * Отображение списка новостей
     *
     * @Route("/news_list", name="news_list")
     *
     */
    public function newsListAction()
    {
        return $this->render('AppBundle:news:news-list.template.html.twig');
    }

    /**
     * Отображение новостей Json
     *
     * @Route("/getJsonNews/{start}", name="JsonNews")
     *
     */
    public function getJsonNewsAction($start=0 , $count=10)
    {
        $cm = $this->clientManager();
        $news = $cm->getLimitNews($start, $count);
        $allNews = $cm->getNews();

        $news_arr = [];
        $liipm = $this->container->get('liip_imagine.cache.manager');

        foreach ($news as $k => $item){
            $news_arr[$k]["id"] = $item->getId();
            $news_arr[$k]["title"] = $item->getTitle();
            $news_arr[$k]["slug"] = $item->getSlug();
            $news_arr[$k]["uri"] = $this->generateUrl(
                'news_post', ['slug' => $item->getSlug()]
            );
            $news_arr[$k]["image"] = $item->getImage();
            $news_arr[$k]["publication_date"] = $item->getPublicationDate()->format('d-m-Y');
            $news_arr[$k]["content"] = $item->getContent();
            $news_arr[$k]["active"] = $item->getActive();
            $news_arr[$k]["description"] = $item->getDescription();

            if ($item->getImage() != null){
                $news_arr[$k]["thumbnails"] = $liipm->getBrowserPath($item->getImage(), 'my_thumb');
            }
        }
        $news_arr["all"] = count($allNews);

        return new JsonResponse($news_arr);
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

        $news = $cm->getNewsBySlug($slug);

        return $this->render('AppBundle:news:news_post.html.twig',[
            'news' => $news,
        ]);
    }
}