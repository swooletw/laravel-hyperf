<?php

declare(strict_types=1);

use SwooleTW\Hyperf\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
