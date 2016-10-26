<?php
declare(strict_types = 1);

namespace My;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends BaseCommand
{
    protected function configure()
    {
        $this->setName('my-command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
