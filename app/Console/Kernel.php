<?php

declare(strict_types=1);

namespace App\Console;

use SwooleTW\Hyperf\Foundation\Console\Kernel as ConsoleKernel;
use SwooleTW\Hyperf\Foundation\Console\Scheduling\Schedule;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command('demo:hi')->everyFiveSeconds();
    }

    public function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
