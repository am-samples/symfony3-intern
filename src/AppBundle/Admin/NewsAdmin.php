<?php

namespace AppBundle\Admin;

use AppBundle\Entity\News;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Cocur\Slugify\Slugify;


class NewsAdmin extends AbstractAdmin
{

    /**
     * Получение названия текущего файла изображения
     *
     */
    protected function getImageThumb($slug)
    {
        $dbservice = $this->getConfigurationPool()->getContainer()->get('app.database_news');
        $resQuery = $dbservice->getNewsBySlug($slug);

        if (!empty($slug)) {

            $imageName = $resQuery[0]->getImage();
            $liipm =  $this->getConfigurationPool()->getContainer()->get('liip_imagine.cache.manager');
            $imageName = !empty($imageName) ? $liipm->getBrowserPath($imageName, 'my_thumb') : '';
        }
        else {
            $imageName = '';
        }

        return $imageName;
    }

    protected function dbManager()
    {
        $dbm = $this->getConfigurationPool()->getContainer()->get('app.database_news');
        return $dbm;
    }

    protected function initImageService()
    {
        $imgService = $this->getConfigurationPool()->getContainer()->get('app.image_manager');
        return $imgService;
    }

    protected function uploadImage(News $news)
    {
        $path = $this->getConfigurationPool()->getContainer()->getParameter('img_path');
        $imgService = $this->initImageService();
        $uploadedImage = $imgService->upload($news, $path);

        return $uploadedImage;
    }


    protected function initTranslation(News $news)
    {
        $cocur = $this->getConfigurationPool()->getContainer()->get('cocur_slugify');

        return $cocur;
    }

    protected function executeImageLogic(News $news, $currentImage, $uploadedImage, $statusFile, $imgService)
    {
        if ($news->getDel() == 1 && !empty($currentImage)) {

            if ($statusFile) {
                $imgService->remove($currentImage);
                $news->setImage(null);
            } else {
                $news->setImage(null);
            }
        } elseif ($news->getDel() == 0) {
            if (empty($currentImage) && (empty($uploadedImage) || !empty($uploadedImage))) {
                $news->setImage($uploadedImage);
            } elseif (!empty($currentImage) && !empty($uploadedImage)) {
                if ($uploadedImage != $currentImage) {
                    $imgService->remove($currentImage);
                    $news->setImage($uploadedImage);
                } else {
                    $news->setImage($uploadedImage);
                }
            }
        }
    }

    /**
     * Формирование полей формы
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $slug = $formMapper->getAdmin()->getSubject()->getSlug();

        $formMapper
            ->add('title', 'text', [
                'label' => 'Заголовок'
            ])
            ->add('slug', 'text',[
                'required' => false,
            ])
            ->add('publicationDate', 'datetime', [
                'label' => 'Дата публикации'
            ])
            ->add('content', 'textarea', [
                'label' => 'Содержание'
            ])
            ->add('active', 'checkbox', [
                'label' => 'Активен',
                'required' => false,
            ])
            ->add('description', 'text', [
                'label' => 'Описание'
            ])
            ->add('fileImage', 'file', [
                'label' => 'Изображение',
                'required' => false,
                'data_class' => null,
                'help' => '<img src="'.$this->getImageThumb($slug).'" alt="Картинки нет">',
            ])
            ->add('del', 'checkbox', [
                'label'=> 'Удалить изображение',
                'required' => false,
            ]);

    }

    /**
     * Формирование полей списка записей
     *
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->addIdentifier('image')
            ->addIdentifier('slug')
            ->addIdentifier('publicationDate', 'datetime', [
                'format' => 'd.m.Y',
                'timezone' => 'America/New_York'
            ])
            ->addIdentifier('active')
            ->addIdentifier('description')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    public function prePersist($news)
    {
        $dbm = $this->dbManager();
        $id = $dbm->getLastNewsId();
        $news->setId($id+1);

        $uploadedImage = $this->uploadImage($news);
        $news->setImage($uploadedImage);
    }

    public function preValidate($news)
    {
        $translation = $this->initTranslation($news);

        $slug = $news->getSlug();
        $newSlug = $translation->activateRuleset('russian')->slugify($news->getTitle());
        $news->setSlug($newSlug);
    }

    public function preUpdate($news)
    {
        $fs = new Filesystem();

        $uploadedImage = $this->uploadImage($news);
        $currentImage = $news->getImage();
        $statusFile = $fs->exists(substr($currentImage, 1));
        $imgService = $this->initImageService();

        $this->executeImageLogic($news, $currentImage, $uploadedImage, $statusFile, $imgService);

    }

}