<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;


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
            ->add('title', 'text')
            ->add('slug', 'text')
            ->add('publicationDate', 'datetime')
            ->add('content', 'textarea')
            ->add('active', 'checkbox')
            ->add('description', 'text')
            ->add('image', 'file', [
                'label' => 'Изображение',
                'required' => false,
                'data_class' => null,
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

//    public function prePersist($image)
//    {
//        $this->manageFileUpload($image);
//    }
//
//    public function preUpdate($image)
//    {
//        $this->manageFileUpload($image);
//    }
//
//    private function manageFileUpload($image)
//    {
//        if ($image->getImage()) {
//            $image->refreshUpdated();
//        }
//    }
}