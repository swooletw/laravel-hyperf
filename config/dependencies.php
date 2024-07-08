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
    Hyperf\Logger\LoggerFactory::class => SwooleTW\Hyperf\Log\Adapter\LogFactoryAdapter::class,
    Hyperf\Validation\Middleware\ValidationMiddleware::class => App\Http\Middleware\ValidationMiddleware::class,
    // Psr\EventDispatcher\EventDispatcherInterface::class => SwooleTW\Hyperf\Event\EventDispatcherFactory::class,
    // Psr\EventDispatcher\ListenerProviderInterface::class => SwooleTW\Hyperf\Event\ListenerProviderFactory::class,
    SwooleTW\Hyperf\Foundation\Console\Contracts\Kernel::class => App\Console\Kernel::class,
];
