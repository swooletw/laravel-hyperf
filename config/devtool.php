<?php

declare(strict_types=1);

return [
    'generator' => [
        'amqp' => [
            'consumer' => [
                'namespace' => 'App\Amqp\Consumers',
            ],
            'producer' => [
                'namespace' => 'App\Amqp\Producers',
            ],
        ],
        'aspect' => [
            'namespace' => 'App\Aspects',
        ],
        'command' => [
            'namespace' => 'App\Console\Commands',
        ],
        'controller' => [
            'namespace' => 'App\Http\Controllers',
        ],
        'job' => [
            'namespace' => 'App\Jobs',
        ],
        'listener' => [
            'namespace' => 'App\Listeners',
        ],
        'middleware' => [
            'namespace' => 'App\Http\Middleware',
        ],
        'process' => [
            'namespace' => 'App\Processes',
        ],
        'request' => [
            'namespace' => 'App\Http\Requests',
        ],
        'model' => [
            'path' => 'app/Models',
            'force_casts' => true,
            'inheritance' => 'Model',
            'uses' => App\Models\Model::class,
        ],
        'event' => [
            'namespace' => 'App\Events',
        ],
        'provider' => [
            'namespace' => 'App\Providers',
        ],
        'component' => [
            'namespace' => 'App\View\Component',
        ],
    ],
];
