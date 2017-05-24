<?php

namespace AppBundle\Users;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CategoryUsers extends AbstractAdmin
{
    protected $baseRoutePattern = 'users';

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username', 'text');
        $formMapper->add('email',   'text');
        $formMapper->add('enabled',   'checkbox');

        $option = array('multiple' => true);
        $formMapper->add('roles', ChoiceType::class, array(
            'multiple' => true,
            'choices'  => array(
                'Пользователь' => 'ROLE_USER',
                'Менеджер' => 'ROLE_MANAGER',
                'Администратор' => 'ROLE_ADMIN',
            )
        ));

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('username');
        $listMapper->addIdentifier('email');
        $listMapper->addIdentifier('roles')->add('_action', 'actions', array(
            'actions' => array(
                'edit' => array(),
                'delete' => array(),
            )
        ));
    }
}