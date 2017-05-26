<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

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
            ->add('content', 'text')
            ->add('active', 'checkbox')
            ->add('description', 'text');
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
}