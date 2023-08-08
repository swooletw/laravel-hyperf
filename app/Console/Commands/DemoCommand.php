<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Psr\Container\ContainerInterface;
use SwooleTW\Hyperf\Foundation\Console\Command;

class DemoCommand extends Command
{
    protected ?string $signature = 'demo:hi {--name= : name}';
    protected string $description = 'Hyperf Demo Command';

    public function __construct(protected ContainerInterface $container)
    {
        parent::__construct();
    }

    public function configure()
    {
        parent::configure();
    }

    public function handle()
    {
        $this->line('Hello ' . ($this->option('name') ?: 'Hyperf'), 'info');
    }
}
