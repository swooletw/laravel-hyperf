<?php

declare(strict_types=1);

namespace App\Listeners;

use SwooleTW\Hyperf\Support\Facades\Log;

class DemoListener
{
    public function handle(object $event): void
    {
        Log::info('Demo listener is triggered.');
    }
}
