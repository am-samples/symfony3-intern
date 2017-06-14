<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use AppBundle\Entity\Callback;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ShowCallbackCommand extends ContainerAwareCommand
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
        $clientManager = $this->getContainer()->get('app.database_callback');
        $res = $clientManager->getCallbackList();

        $results = [];
        foreach ($res as $k => $item){
            $results[$k]["name"] = $item->getName();
            $results[$k]["email"] = $item->getEmail();
            $results[$k]["comment"] = $item->getComment();
        }

        $table = new Table($output);
            $table
                ->setHeaders(array('Name', 'Email', 'Comment'))->setRows($results);

        $table->render();
    }
}