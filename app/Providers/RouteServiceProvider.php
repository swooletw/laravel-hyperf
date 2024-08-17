<?php

declare(strict_types=1);

namespace App\Providers;

use Hyperf\HttpServer\Router\Router;
use SwooleTW\Hyperf\Foundation\Support\Providers\RouteServiceProvider as BaseServiceProvider;

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
        Router::group(
            '/',
            $this->registerRouteFile(base_path('routes/web.php')),
            ['middleware' => 'web']
        );

        Router::group(
            '/api',
            $this->registerRouteFile(base_path('routes/api.php')),
            ['middleware' => 'api']
        );
    }
}
