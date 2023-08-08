<?php

declare(strict_types=1);

namespace App\Providers;

use SwooleTW\Hyperf\Foundation\Support\Providers\EventServiceProvider as BaseServiceProvider;

class EventServiceProvider extends BaseServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected array $listen = [
        \App\Events\DemoEvent::class => [
            \App\Listeners\DemoListener::class,
        ],
        //
    ];
}
