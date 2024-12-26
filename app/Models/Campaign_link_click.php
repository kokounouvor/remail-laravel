<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign_link_click extends Model
{
    use HasFactory;

    function addTrackingToLinks($htmlContent, $campaign_id)
    {
        // Créer un objet DOMDocument
        $dom = new \DOMDocument();

        // Suppression des erreurs d'analyse HTML (pour les emails mal formés)
        libxml_use_internal_errors(true);

        // Charger le contenu HTML dans DOMDocument
        $dom->loadHTML('<?xml encoding="UTF-8">' . $htmlContent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        // Récupérer tous les éléments <a> (liens)
        $links = $dom->getElementsByTagName('a');

        // Parcourir tous les liens
        foreach ($links as $link) {
            // Obtenir l'URL du lien
            $originalUrl = $link->getAttribute('href');

            // Vérifier si l'URL est valide (si elle commence par http:// ou https://)
            if (filter_var($originalUrl, FILTER_VALIDATE_URL)) {
                // Générer le lien de suivi
                $trackingUrl = route('trackClick', ['campaign_id' => $campaign_id, 'url' => base64_encode($originalUrl)]);

                // Remplacer l'URL du lien par l'URL de suivi
                $link->setAttribute('href', $trackingUrl);
            }
        }

        // Sauvegarder le HTML modifié
        $modifiedHtml = $dom->saveHTML();

        // Retirer la déclaration XML ajoutée par loadHTML
        $modifiedHtml = preg_replace('/^<\?xml.*\?>/', '', $modifiedHtml);

        return $modifiedHtml;
    }
}
