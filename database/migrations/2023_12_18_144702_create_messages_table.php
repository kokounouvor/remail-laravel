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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->text('token')->nullable();
            $table->text('campaign_id')->nullable();
            $table->text('recipient_email')->nullable();
            $table->text('subject')->nullable();
            $table->text('sent')->nullable();
            $table->text('open')->nullable();
            $table->text('open_at')->nullable();
            $table->text('click_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
