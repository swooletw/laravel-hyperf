<?php

declare(strict_types=1);

use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', [App\Http\Controllers\IndexController::class, 'index'], ['name' => 'home']);

Router::get('/favicon.ico', function () {
    return '';
});
