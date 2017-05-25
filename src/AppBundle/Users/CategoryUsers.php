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

    protected function configureRoles()
    {
        $container = $this->getConfigurationPool()->getContainer();
        $roles = $container->getParameter('security.role_hierarchy.roles');
        $rolesChoices = self::flattenRoles($roles);

        return $rolesChoices;
    }

    static protected function flattenRoles($rolesHierarchy)
    {
        $keys = [];
        $flatRoles = [];
        $namesOfRoles = [
            'ROLE_USER' =>    "Пользователь",
            'ROLE_MANAGER' => "Менеджер",
            'ROLE_ADMIN' =>   "Администратор"
        ];
        foreach($rolesHierarchy as $k => $roles) {

            if(empty($roles)) {
                continue;
            }

            foreach($roles as $role) {
                $flatRoles[] = $role;
                $keys[] = isset($namesOfRoles[$role]) ? $namesOfRoles[$role] : $role;
            }
        }

        $_flatRoles = [];
        foreach ($flatRoles as $k => $flatRole) {
            $_flatRoles[$keys[$k]] = $flatRole;
        }

        return $_flatRoles;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text')
            ->add('email',   'text')
            ->add('enabled',   'checkbox')
            ->add('roles', ChoiceType::class, [
            'multiple' => true,
            'choices'  => $this->configureRoles()
        ]);

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->addIdentifier('email')
            ->addIdentifier('roles', 'choice', [
                'multiple'=> true,
                'choices'  => array_flip($this->configureRoles())
            ])
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }
}