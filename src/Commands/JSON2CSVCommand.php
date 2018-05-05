<?php

namespace Alexsabdev\Convrtr\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class JSON2CSVCommand extends Command
{
    /**
     * Configure the command.
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setName('json2csv')
            ->setDescription('Converts a JSON file to a CSV file')
            ->addArgument('src', InputArgument::REQUIRED, 'Source JSON file')
            ->addArgument('dst', InputArgument::REQUIRED, 'Destination CSV file');
    }

    /**
     * Execute the command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Converting...</info>');

        // magic goes here

        $output->writeln('<info>Converted successfully!</info>');
    }
}