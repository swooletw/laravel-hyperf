<?php

declare(strict_types=1);

namespace App\Providers;

use Hyperf\HttpServer\Router\DispatcherFactory;
use SwooleTW\Hyperf\Foundation\Support\Providers\RouteServiceProvider as BaseServiceProvider;
use SwooleTW\Hyperf\Support\Facades\Route;

class RouteServiceProvider extends BaseServiceProvider
{
    /**
     * The route files for the application.
     */
    protected array $routes = [
    ];

    public function boot(): void
    {
        parent::boot();

        Route::group(
            '/',
            base_path('routes/web.php'),
            ['middleware' => 'web']
        );

        Route::group(
            '/api',
            base_path('routes/api.php'),
            ['middleware' => 'api']
        );
    }
}
