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

    protected static function flattenRoles($rolesHierarchy)
    {
        $flatRoles = [];
        $namesOfRoles = [
            'ROLE_USER' =>    "Пользователь",
            'ROLE_MANAGER' => "Менеджер",
            'ROLE_ADMIN' =>   "Администратор"
        ];
        foreach($rolesHierarchy as $roles) {

            if(empty($roles)) {
                continue;
            }

            foreach($roles as $role) {
                if(!isset($flatRoles[$role])) {

                    isset($namesOfRoles[$role]) ? $flatRoles[$namesOfRoles[$role]] = $role : $flatRoles[$role] = $role;
                }
            }
        }

        return $flatRoles;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $container = $this->getConfigurationPool()->getContainer();
        $roles = $container->getParameter('security.role_hierarchy.roles');
        $rolesChoices = self::flattenRoles($roles);

        $formMapper->add('username', 'text');
        $formMapper->add('email',   'text');
        $formMapper->add('enabled',   'checkbox');
        $formMapper->add('roles', ChoiceType::class, [
            'multiple' => true,
            'choices'  => $rolesChoices
        ]);

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->addIdentifier('email')
            ->addIdentifier('roles')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }
}