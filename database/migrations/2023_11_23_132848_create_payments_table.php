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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->text("tnrx")->nullable();
            $table->text("nom")->nullable();
            $table->text("prenom")->nullable();
            $table->text("email")->nullable();
            $table->text("phone")->nullable();
            $table->text("adress")->nullable();
            $table->text("city")->nullable();
            $table->text("zip")->nullable();
            $table->text("country")->nullable();
            $table->text("region")->nullable();
            $table->text("plan")->nullable();
            $table->text("journal")->nullable();
            $table->text("price")->nullable();
            $table->text("start_date")->nullable();
            $table->text("end_date")->nullable();
            $table->text("ip")->nullable();
            $table->text("status")->nullable();
            $table->text("kkiapay_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
