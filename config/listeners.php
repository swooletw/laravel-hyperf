<?php

declare(strict_types=1);

return [
    Hyperf\ExceptionHandler\Listener\ErrorExceptionHandler::class,
    Hyperf\Coordinator\Listener\ResumeExitCoordinatorListener::class,
    SwooleTW\Hyperf\Foundation\Queue\Listeners\QueueHandleListener::class,
    // App\Listeners\DbQueryExecutedListener::class,
];
