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
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->text("user")->nullable();
            $table->text("workspace_id")->nullable();
            $table->text("hash")->nullable();
            $table->text("email")->nullable();
            $table->text("first_name")->nullable();
            $table->text("last_name")->nullable();
            $table->text("meta")->nullable();
            $table->text("tag")->nullable();
            $table->text("unsubscribed_at")->nullable();
            $table->text("unsubscribe_event_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers');
    }
};
