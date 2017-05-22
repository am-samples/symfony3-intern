<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use Doctrine\ORM\EntityManager;
use Doctrine\Bundle\DoctrineBundle\Registry;
use AppBundle\Controller\DefaultController;

class ShowCallbackCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:callback')
            ->setDescription('Show callback table.')
            ->setHelp('This command allows you to show rows of callback...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        $clientManager = $this->getContainer()->get('doctrine.orm.entity_manager');
//        $em = $this->getContainer()->get('doctrine');
//        $repository = $this->getDoctrine()->getRepository('AppBundle:Callback');


//        $rows = new DefaultController();
//
//        $resq  = $rows->showCallback();

        $table = new Table($output);
        foreach ($resq as $elem){

            $table
                ->setHeaders(array('Name', 'Email', 'Comment'))
                ->setRows(array(
                    array('99921-58-10-7', 'Divine Comedy', 'Dante Alighieri'),
                ));
        $table->render();
    }
}