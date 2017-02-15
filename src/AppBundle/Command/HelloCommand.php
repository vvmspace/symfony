<?php
// src/AppBundle/Command/HelloCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected function configure()
    {
        $this
            // name of tour symfony command (the part after "bin/console")
            ->setName('hello')

            // description "php bin/console list"
            ->setDescription('Saying hello')

            // --help
            ->setHelp("Type hello to get hello")
        ;
    }

protected function execute(InputInterface $input, OutputInterface $output)
{
    $output->writeln('Hello');
}
}