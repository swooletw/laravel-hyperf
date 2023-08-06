<?php

declare(strict_types=1);

use function Hyperf\Support\env;

return [
    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',
];
