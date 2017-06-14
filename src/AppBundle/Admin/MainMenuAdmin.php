<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Класс для работы с заявками
 */
class MainMenuAdmin extends AbstractAdmin
{
    /**
     * Формирование полей формы для работы с пунктом меню
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text',[
                'label' => 'Название пункта меню'
            ])
            ->add('link', ChoiceType::class, [
                'label' => 'Модуль',
                'required' => false,
                'choices'  => [
                    'Главная' => 'homepage',
                    'Новости' => 'news',
                    'Заявки' => 'callback_list',
                    'Кавычки' => 'forest',
                    'Обратная связь' => 'callback_form',
                    'CMS' => 'sonata_admin_dashboard',
                    'Регистрация' => 'fos_user_registration_register',
                    'Авторизация' => 'fos_user_security_login',
                ],
            ])
            ->add('customLink', 'text',[
                'label' => 'Путь',
                'required' => false,
            ])
            ->add('active', 'checkbox',[
                'required' => false,
            ]);
    }

    /**
     * Формирование полей списка пунктов меню
     *
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name')
            ->addIdentifier('link')
            ->addIdentifier('customLink')
            ->addIdentifier('active')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }
}