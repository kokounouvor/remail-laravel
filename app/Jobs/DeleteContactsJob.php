<?php

namespace App\Jobs;

use App\Models\Notification;
use App\Models\Subscriber;
use App\Models\Tag;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class DeleteContactsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $segment;

    /**
     * Create a new job instance.
     */
    public function __construct($segment)
    {
        //
        $this->segment=$segment;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        (new Notification())->add("Démarrage de la suppresion", "La suppression du segment et de ces contacts sont en cours. Vous serez avertis des que c'est terminé.");
        Log::info('Starting DeleteContactsJob for segment: ' . $this->segment);
        
        // Démarrer directement la suppression des contacts liées à ce segment
        Subscriber::where("tag",$this->segment)->delete();

        (new Notification())->add("Suppression de segment terminé", "La suppression de vos contacts sont terminé.");
        //Log::info('Successfully completed DeleteContactsJob');
    }
}
