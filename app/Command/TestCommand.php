<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;

/**
 * @Command
 */
class TestCommand extends HyperfCommand
{
    protected $name = 't';

    public function handle()
    {
        $this->line('Hello Hyperf!', 'info');
    }
}
