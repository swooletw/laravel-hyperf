<?php

declare(strict_types=1);

namespace Tests;

use SwooleTW\Hyperf\Foundation\Testing\Concerns\RunTestsInCoroutine;
use SwooleTW\Hyperf\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RunTestsInCoroutine;
}
