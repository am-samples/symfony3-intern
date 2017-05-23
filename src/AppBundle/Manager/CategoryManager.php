<?php

namespace AppBundle\Manager;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use FOS\UserBundle\Model\UserManagerInterface;

class CategoryManager extends AbstractAdmin
{
    protected $baseRoutePattern = 'users';

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username', 'text');
        $formMapper->add('email',   'text');
        $formMapper->add('roles', 'collection');

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('username');
        $listMapper->addIdentifier('email');
        $listMapper->addIdentifier('roles');
    }
}