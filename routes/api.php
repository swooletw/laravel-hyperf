<?php

declare(strict_types=1);

use App\Http\Controllers\IndexController;
use Hyperf\HttpServer\Router\Router;

Router::any('/', [IndexController::class, 'index']);
