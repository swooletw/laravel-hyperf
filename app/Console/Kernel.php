<?php

declare(strict_types=1);

namespace App\Console;

use SwooleTW\Hyperf\Foundation\Console\Kernel as ConsoleKernel;
use SwooleTW\Hyperf\Foundation\Console\Scheduling\Schedule;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     *
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command('demo:hi --name=Hyperf')->everyFiveSeconds();
    }
}
