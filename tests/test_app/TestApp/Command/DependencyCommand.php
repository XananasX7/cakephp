<?php
declare(strict_types=1);

namespace TestApp\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use stdClass;

class DependencyCommand extends Command
{
    public $inject;
    public $io;

    public function __construct(stdClass $inject, ConsoleIo $io)
    {
        $this->inject = $inject;
        $this->io = $io;
    }

    public function execute(Arguments $args, ConsoleIo $io): int
    {
        $io->out('Dependency Command');
        $io->out('constructor inject: ' . json_encode($this->inject));
        $io->out('constructor io: ' . get_class($this->io));

        return static::CODE_SUCCESS;
    }
}
