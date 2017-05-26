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
        $clientManager = $this->getContainer()->get('app.database_service');
        $res = $clientManager->showCallback();
        $rows = [];

        foreach ($res as $val){

            $rows[] = [$val["name"], $val["email"], $val["comment"]];
        }

        $table = new Table($output);
            $table
                ->setHeaders(array('Name', 'Email', 'Comment'))->setRows($rows);

        $table->render();
    }
}