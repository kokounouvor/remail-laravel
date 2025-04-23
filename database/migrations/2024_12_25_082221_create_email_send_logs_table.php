<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('email_send_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_service_id')->constrained('email_services');  // Référence au serveur SMTP
            $table->string('recipient_email');
            $table->boolean('sent');  // État de l'envoi (réussi ou échoué)
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('email_send_logs');
    }
};
