<?php

namespace AppBundle\Admin;

use AppBundle\Entity\News;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class NewsAdmin extends AbstractAdmin
{

    /**
     * Получение названия текущего файла изображения
     *
     */
    protected function getImageName($slug)
    {
        $dbservice = $this->getConfigurationPool()->getContainer()->get('app.database_news');
        $resQuery = $dbservice->getNewsBySlug($slug);

        $imageName = $resQuery[0]->getImage();

        $liipm =  $this->getConfigurationPool()->getContainer()->get('liip_imagine.cache.manager');
        $imageName = $liipm->getBrowserPath($imageName, 'my_thumb');

        return $imageName;
    }

    /**
     * Формирование полей формы
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $slug = $formMapper->add('slug', 'text')->getAdmin()->getSubject()->getSlug();

        $formMapper
            ->add('title', 'text', [
                'label' => 'Заголовок'
            ])
            ->add('publicationDate', 'datetime', [
                'label' => 'Дата публикации'
            ])
            ->add('content', 'textarea', [
                'label' => 'Содержание'
            ])
            ->add('active', 'checkbox', [
                'label' => 'Активен'
            ])
            ->add('description', 'text', [
                'label' => 'Описание'
            ])
            ->add('fileImage', 'file', [
                'label' => 'Изображение',
                'required' => false,
                'data_class' => null,
                'help' => '<img src="'.$this->getImageName($slug).'" class="admin-preview" />',
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
                'format' => 'Y-m-d',
                'timezone' => 'America/New_York'
            ])
            ->addIdentifier('content')
            ->addIdentifier('active')
            ->addIdentifier('description')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    public function preUpdate($news)
    {
        $path = $this->getConfigurationPool()->getContainer()->getParameter('img_path');
        $imgService = $this->getConfigurationPool()->getContainer()->get('app.image_manager');
        $correctPath = $imgService->upload($news, $path);

        if ($news->getDel() == 1 && !empty($news->getImage())) {
            $imgService->remove($news->getImage());
            $news->setImage(null);
        }
        elseif ($news->getDel() == 0) {
            if(!empty($correctPath) && empty($news->getImage())){
                $news->setImage($correctPath);
            }
            else {
                if ($correctPath != $news->getImage()) {
                    $imgService->remove($news->getImage());
                    $news->setImage($correctPath);
                }
            }
        }


    }

}