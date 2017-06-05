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
//        $em->getRepository('AppBundle:Menu');

        $qb = $em->createQueryBuilder();

        $qb ->add('select', 'm')
            ->add('from', 'AppBundle:Menu:items_menu m')
            ->add('where', 'm.active = 1');

        $query = $qb->getQuery();
        $resQuery = $query->getResult();

        foreach ($resQuery as $item) {
            $menu->addChild($item->getName(), ['route' => $item->getLink()]);
        }

        return $menu;
    }
}