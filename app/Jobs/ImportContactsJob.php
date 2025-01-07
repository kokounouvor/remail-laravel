<?php

namespace App\Jobs;

use App\Models\Import;
use App\Models\Notification;
use App\Models\Users;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ImportContactsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;
    protected $tag;
    protected $user;

    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $tag, $user)
    {
        $this->filePath = $filePath;
        $this->tag = $tag;
        $this->user = $user;
    }

    public function handle(): void
    {
        (new Notification())->addS($this->user,"Démarrage de l'import", "L'import de vos contacts sont en cours. Vous serez avertis des que c'est terminé.");
        Log::info('Starting ImportContactsJob for file: ' . $this->filePath);

        try {
            $user_data = Users::where("token", $this->user)->first();
            // Vérifier si le chemin du fichier est bien défini et non vide
            if (empty($this->filePath)) {
                Log::error('File path is empty');
                throw new \Exception('File path is empty');
            }

            // Crée un enregistrement dans la table des imports
            $importId =Import::insertGetId([
                "workspace_id" => $user_data->workspace_id,
                'file_path' => $this->filePath,
                'status' => 'in progress',
                'progress' => 0,
                'user' => $this->user,
                'created_at' => now(),
            ]);

            // Vérification si le fichier existe avant de tenter de le lire
            if (Storage::disk('public')->exists($this->filePath)) {
                $csvData = Storage::disk('public')->get($this->filePath);
            } else {
                Log::error('File not found: ' . $this->filePath);
                throw new \Exception('File not found');
            }

            //dd($csvData);
            // Traitement du fichier CSV
            $lines = array_map("str_getcsv", explode("\n", $csvData));
            $total = count($lines);

            foreach ($lines as $index => $line) {
                // Validation des emails dans chaque colonne
                for ($i = 0; $i < 3; $i++) {
                    if (!empty($line[$i]) && filter_var($line[$i], FILTER_VALIDATE_EMAIL)) {
                        DB::table("subscribers")->insert([
                            "workspace_id" => $user_data->workspace_id,
                            "email" => $line[$i],
                            "tag" => $this->tag,
                            "user" => $this->user,
                            "created_at" => NOW()
                        ]);
                        break; // Sortir dès qu'un email valide est trouvé
                    }
                }

                // Mettre à jour la progression de l'importation
                DB::table('imports')->where('id', $importId)->update([
                    'progress' => round(($index + 1) / $total * 100),
                ]);
            }

            // Mise à jour de l'état de l'import
            DB::table('imports')->where('id', $importId)->update(['status' => 'completed']);

            // Suppression du fichier après traitement
            //Storage::disk('public')->delete($this->filePath);

            (new Notification())->addS($this->user,"Import terminé", "L'import de vos contacts sont terminé.");
            //Log::info('Successfully completed ImportContactsJob');
        } catch (\Exception $e) {
            Log::error('ImportContactsJob failed: ' . $e->getMessage());
            throw $e; // Rejette l'erreur pour marquer le job comme échoué
        }
    }
}
