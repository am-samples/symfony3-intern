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

        $em = $this->container->get('doctrine')->getManager();
        $resQuery = $em->getRepository('AppBundle:Menu')->findBy(['active' => '1']);

        $token = $this->container->get('security.token_storage')->getToken();
        $roles = $token->getUser()->getRoles();

        foreach ($resQuery as $item) {

            if ($item->getName() == 'Заявки' && !in_array('ROLE_MANAGER', $roles)) {
                continue;

            }
            elseif ($item->getName() == 'CMS' && !in_array('ROLE_ADMIN', $roles)) {
                continue;
            }

            else {

                if($item->getCustomLink()){
                    $menu->addChild($item->getName(), ['uri' => $item->getCustomLink()]);
                }
                else {
                    $menu->addChild($item->getName(), ['route' => $item->getLink()]);
                }
            }


        }

        return $menu;
    }
}