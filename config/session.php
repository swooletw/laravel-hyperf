<?php

declare(strict_types=1);

use Hyperf\Session\Handler;

return [
    'handler' => Handler\FileHandler::class,
    'options' => [
        'path' => storage_path('framework/sessions'),
        'connection' => 'default',
        'table' => 'sessions',
        'gc_maxlifetime' => 1200,
        'session_name' => 'HYPERF_SESSION_ID',
        'domain' => null,
        'cookie_lifetime' => 5 * 60 * 60,
        'cookie_same_site' => 'lax',
    ],
];
