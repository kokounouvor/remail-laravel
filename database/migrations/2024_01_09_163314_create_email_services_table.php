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
        Schema::create('email_services', function (Blueprint $table) {
            $table->id();
            $table->text("workspace_id")->nullable();
            $table->text("user")->nullable();
            $table->text("name")->nullable();
            $table->text("mail_mailer")->nullable();
            $table->text("mail_host")->nullable();
            $table->text("mail_port")->nullable();
            $table->text("mail_username")->nullable();
            $table->text("mail_email")->nullable();
            $table->text("mail_password")->nullable();
            $table->text("mail_encryption")->nullable();
            $table->text("max_per_hour")->nullable();
            $table->text("max_per_day")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_services');
    }
};
