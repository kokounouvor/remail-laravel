<?php

namespace App\Console;

use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    /**
     * Define the application's command schedule.
     */
    protected $commands = [
        Commands\SendMail::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('subscribers:sendmail')->cron('* * * * *');
        $schedule->command('app:send-campaign-mail')->cron('* * * * *')->everyFiveMinutes();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
