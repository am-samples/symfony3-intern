<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class NewsAdmin extends AbstractAdmin
{
    /**
     * Формирование полей формы
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->add('title', 'text', [
                'label' => 'Заголовок'
            ])
            ->add('slug', 'text')
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
            ])
            ->add('nameOfImage', 'text', [
                'label' => 'Текущее изображение:',
                'attr' => [
                    'readonly' => true,
                    'placeholder' => 'Something.jpg',
                    'style' => 'width: 200px; font-size: 16px;',
                ],
                'required' => false,
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
        $imgService = $this->getConfigurationPool()->getContainer()->get('app.image_upload');
        $correctPath = $imgService->upload($news, $path);

        if(($news->getDel() == 1) && (!empty($news->getImage()))) {
            $del = unlink(substr($news->getImage(), 1));
            $news->setImage(null);
        }

        if(!empty($correctPath) && !empty($news->getImage()) && $news->getDel() == 0) {
            if ($correctPath != $news->getImage()) {
                $del = unlink(substr($news->getImage(), 1));
                $news->setImage($correctPath);
            }
        }

        if(!empty($correctPath) && empty($news->getImage()) && $news->getDel() == 0) {
            $news->setImage($correctPath);
        }

    }

}