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

    protected function getNameOfRoutes()
    {
        /**
         * @var $router \Symfony\Component\Routing\Router
         */
        $container = $this->getConfigurationPool()->getContainer();
        $router = $container->get('router');
        /**
         * @var $collection \Symfony\Component\Routing\RouteCollection
         */
        $collection = $router->getRouteCollection();
        $allRoutes = $collection->all();

        $routes = array();

        /**
         * @var $params \Symfony\Component\Routing\Route
         */
        foreach ($allRoutes as $route => $params)
        {
            $defaults = $params->getDefaults();

            if (isset($defaults['_controller']))
            {
                $controllerAction = explode(':', $defaults['_controller']);
                $controller = $controllerAction[0];

                if (!isset($routes[$controller])) {
                    $routes[$controller] = array();
                }

                $routes[$controller][]= $route;
            }
        }

        $correctRoutes = [];
        $trueNamespaces = [
            'Sonata\AdminBundle\Controller\CoreController',
            'FOS\UserBundle\Controller\SecurityController',
            'FOS\UserBundle\Controller\RegistrationController'
        ];
        foreach ($routes as $k => $item_route)
        {
            $key = explode('\C', $k);

            print_r($key);
            if ($key[0] == 'AppBundle' || in_array($k, $trueNamespaces)) {
                foreach ($item_route as $route) {
                    $correctRoutes[$route] = $route;

                }
            }
        }

        return $correctRoutes;

    }

    /**
     * Формирование полей формы для работы с пунктом меню
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text')
            ->add('link', ChoiceType::class, [
                'choices'  => $this->getNameOfRoutes(),
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
            ->addIdentifier('active')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }
}