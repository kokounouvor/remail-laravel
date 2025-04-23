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
        // Commands\SendCampaignMail::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
        // Planification des commandes
        $schedule->command('app:send-campaign-mail-schedule')->everyFiveMinutes();
        //$schedule->command('app:send-campaign-mail')->everyThreeMinutes();

        // Exécution de queue:work en tâche de fond
        $schedule->command('queue:work --queue=import_contacts --stop-when-empty')->everyMinute(); // Vous pouvez ajuster la fréquence selon vos besoins
        $schedule->command('queue:work --queue=delete_contacts --stop-when-empty')->everyMinute(); // Vous pouvez ajuster la fréquence selon vos besoins
        $schedule->command('queue:work --queue=direct_campaign --stop-when-empty')->everyThreeMinutes(); // Vous pouvez ajuster la fréquence selon vos besoins
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
