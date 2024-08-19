<?php

declare(strict_types=1);

namespace App\Providers;

use Hyperf\Contract\ConfigInterface;
use SwooleTW\Hyperf\Support\Environment;
use SwooleTW\Hyperf\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->addGracefulSignalHandlers();
    }

    public function register(): void
    {
    }

    protected function addGracefulSignalHandlers(): void
    {
        if (! $this->app->get(Environment::class)->isProduction()) {
            return;
        }

        $handlers = $this->getConfig()->get('signal.handlers', []);
        $this->getConfig()->set('signal.handlers', array_merge($handlers, [
            \Hyperf\Process\Handler\ProcessStopHandler::class,
            \SwooleTW\Hyperf\Foundation\Signal\WorkerStopHandler::class,
        ]));
    }

    protected function getConfig(): ConfigInterface
    {
        return $this->app->get(ConfigInterface::class);
    }
}
