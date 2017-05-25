<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Класс для работы с зарегистрированными пользователями
 */
class UsersAdmin extends AbstractAdmin
{
    protected $baseRoutePattern = 'users';

    public $keys = [];
    public $flatRoles = [];

    /**
     * Получение иерархии ролей из конфигурационного файла
     *
     * @return array
     */
    protected function getRolesFromConfig()
    {
        $container = $this->getConfigurationPool()->getContainer();
        $roles = $container->getParameter('security.role_hierarchy.roles');
        $rolesChoices = self::flattenRoles($roles);

        return $rolesChoices;
    }

    /**
     * Получение  корректного массива ролей для опций в полях формы и списка
     *
     * @param $rolesHierarchy
     * @return array
     */
    static protected function flattenRoles($rolesHierarchy)
    {
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

    /**
     * Формирование полей формы для работы с данными
     *
     * @param FormMapper $formMapper
     */
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

    /**
     * Формирование полей списка записей
     *
     * @param ListMapper $listMapper
     */
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