<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'handler' => [
        'http' => [
            SwooleTW\Hyperf\Foundation\Exceptions\Handlers\HttpExceptionHandler::class,
            App\Exceptions\Handlers\AppExceptionHandler::class,
        ],
    ],
];
