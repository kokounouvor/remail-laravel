<?php

namespace App\Console\Commands;

use App\Jobs\SendCampaignMailJob;
use Illuminate\Console\Command;

class SendCampaignMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-campaign-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Cette commande permet d'envoyer les campagnes Mail directement";

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
        SendCampaignMailJob::dispatch()->onQueue("direct_campaign");
    }
}
