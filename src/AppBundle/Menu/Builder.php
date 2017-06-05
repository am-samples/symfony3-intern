<?php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Главная', ['route' => 'homepage']);
        $menu->addChild('Новости', ['route' => 'news']);
        $menu->addChild('Заявки', ['route' => 'callback_list']);
        $menu->addChild('CMS', ['route' => 'sonata_admin_redirect']);

        return $menu;
    }
}