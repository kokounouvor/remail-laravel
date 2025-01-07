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
        Commands\SendCampaignMail::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
        // Planification des commandes
        $schedule->command('app:send-campaign-mail-schedule')->everyFiveMinutes();
        $schedule->command('app:send-campaign-mail')->everyFiveMinutes();

        // Exécution de queue:work en tâche de fond
        $schedule->command('queue:work --queue=delete_contacts')->everyMinute(); // Vous pouvez ajuster la fréquence selon vos besoins
        $schedule->command('queue:work --queue=import_contacts')->everyMinute(); // Vous pouvez ajuster la fréquence selon vos besoins
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
