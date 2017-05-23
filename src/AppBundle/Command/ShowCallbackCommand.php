<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;

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
        $table = new Table($output);
            $table
                ->setHeaders(array('Name', 'Email', 'Comment'))
                ->setRows(array(
                    array('99921-58-10-7', 'Divine Comedy', 'Dante Alighieri'),
                ));
        $table->render();
    }
}