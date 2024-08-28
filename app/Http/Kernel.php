<?php

declare(strict_types=1);

namespace App\Http;

use SwooleTW\Hyperf\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected array $middleware = [
        // \App\Http\Middleware\TrimStrings::class,
        // \App\Http\Middleware\ConvertEmptyStringsToNull::class
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected array $middlewareGroups = [
        'web' => [
            // \SwooleTW\Hyperf\Router\Middleware\SubstituteBindings::class,
            // \SwooleTW\Hyperf\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        ],

        'api' => [
            // 'throttle:60,1,api',
            // \SwooleTW\Hyperf\Router\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's middleware aliases.
     *
     * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */
    protected array $middlewareAliases = [
        'throttle' => \SwooleTW\Hyperf\Router\Middleware\ThrottleRequests::class,
        'bindings' => \SwooleTW\Hyperf\Router\Middleware\SubstituteBindings::class,
    ];

    /**
     * The priority-sorted list of middleware.
     *
     * Forces non-global middleware to always be in the given order.
     *
     * @var string[]
     */
    protected array $middlewarePriority = [
        // \SwooleTW\Hyperf\Router\Middleware\ThrottleRequests::class,
        // \SwooleTW\Hyperf\Router\Middleware\SubstituteBindings::class,
    ];
}
