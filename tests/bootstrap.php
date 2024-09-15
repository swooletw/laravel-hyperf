<?php

declare(strict_types=1);

use SwooleTW\Hyperf\Foundation\Testing\TestScanHandler;

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL);

! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));
! defined('SWOOLE_HOOK_FLAGS') && define('SWOOLE_HOOK_FLAGS', SWOOLE_HOOK_ALL);

Swoole\Runtime::enableCoroutine(true);

require BASE_PATH . '/vendor/autoload.php';

Hyperf\Di\ClassLoader::init(null, null, new TestScanHandler());

$app = require BASE_PATH . '/bootstrap/app.php';

$app->get(Hyperf\Contract\ApplicationInterface::class);
