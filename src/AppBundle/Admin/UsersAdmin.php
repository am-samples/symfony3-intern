<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Класс для работы с зарегистрированными пользователями
 */
class UsersAdmin extends AbstractAdmin
{
    protected $baseRoutePattern = 'users';

    static public $namesOfRoles = [
        'ROLE_USER' =>    "Пользователь",
        'ROLE_MANAGER' => "Менеджер",
        'ROLE_ADMIN' =>   "Администратор"
    ];

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
        $namesOfRoles = self::$namesOfRoles;

        $flatRoles = [];
        foreach($rolesHierarchy as $roles) {

            if(empty($roles)) {
                continue;
            }

            foreach($roles as $role) {
                $flatRoles[$role] = $role;
            }
        }

        foreach ($flatRoles as &$flatRole) {
            $flatRole = isset($namesOfRoles[$flatRole]) ? $namesOfRoles[$flatRole] : $flatRole;
        }

        return $flatRoles;
    }

    /**
     * Формирование полей формы для работы с данными
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text', [
                'label' => 'Имя пользователя'
            ])
            ->add('email',   'text')
            ->add('enabled',   'checkbox', [
                'label' => 'Активен'
            ])
            ->add('roles', ChoiceType::class, [
            'label' => 'Роли',
            'multiple' => true,
            'choices'  => array_flip($this->getRolesFromConfig())
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
                'choices'  => $this->getRolesFromConfig()
            ])
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }
}