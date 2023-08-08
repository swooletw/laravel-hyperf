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
    Psr\EventDispatcher\EventDispatcherInterface::class => SwooleTW\Hyperf\Foundation\Event\EventDispatcherFactory::class,
    Hyperf\HttpServer\Router\DispatcherFactory::class => SwooleTW\Hyperf\Router\DispatcherFactory::class,
    Hyperf\Logger\LoggerFactory::class => SwooleTW\Hyperf\Log\Adapter\LogFactoryAdapter::class,
    Hyperf\Validation\Middleware\ValidationMiddleware::class => App\Http\Middleware\ValidationMiddleware::class,
    SwooleTW\Hyperf\Foundation\Console\Contracts\Kernel::class => App\Console\Kernel::class,
];
