<?php
namespace AppBundle\Menu;

use AppBundle\Entity\Menu;
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        // Routes from Database
        $em = $this->container->get('doctrine')->getManager();
        $mn = $em->getRepository('AppBundle:Menu');


        $menu->addChild('Главная', ['route' => 'homepage']);
        $menu->addChild('Новости', ['route' => 'news']);
        $menu->addChild('Заявки', ['route' => 'callback_list']);
        $menu->addChild('CMS', ['route' => 'sonata_admin_redirect']);

        return $menu;
    }
}