<?php

declare(strict_types=1);

namespace App\Providers;

use SwooleTW\Hyperf\Foundation\Support\Providers\RouteServiceProvider as BaseServiceProvider;
use SwooleTW\Hyperf\Support\Facades\Route;

class RouteServiceProvider extends BaseServiceProvider
{
    /**
     * The route files for the application.
     */
    protected array $routes = [
        //
    ];

    public function register(): void
    {
        $this->app->afterResolving('router', fn () => $this->registerRoutes());
    }

    protected function registerRoutes(): void
    {
        Route::group(
            '/',
            $this->registerRouteFile(base_path('routes/web.php')),
            ['middleware' => 'web']
        );

        Route::group(
            '/api',
            $this->registerRouteFile(base_path('routes/api.php')),
            ['middleware' => 'api']
        );
    }
}
