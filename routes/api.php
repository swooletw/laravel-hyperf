<?php

declare(strict_types=1);

use App\Http\Controllers\IndexController;
use SwooleTW\Hyperf\Support\Facades\Route;

Route::any('/', [IndexController::class, 'index']);
