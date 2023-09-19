<?php

declare(strict_types=1);

namespace App\Providers;

use SwooleTW\Hyperf\Foundation\Support\Providers\RouteServiceProvider as BaseServiceProvider;

class RouteServiceProvider extends BaseServiceProvider
{
    /**
     * The route files for the application.
     */
    protected array $routes = [
        BASE_PATH . '/routes/web.php',
        BASE_PATH . '/routes/api.php',
    ];
}
