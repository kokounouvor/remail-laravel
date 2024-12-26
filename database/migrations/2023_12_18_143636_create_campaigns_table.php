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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->text('uuid')->nullable();
            $table->text('workspace_id')->nullable();
            $table->text('user')->nullable();
            $table->text('name')->nullable();
            $table->text('subject')->nullable();
            $table->text('from_name')->nullable();
            $table->text('from_email')->nullable();
            $table->text('subscriber_tag')->nullable();
            $table->longText('contents')->nullable();
            $table->text('status')->nullable();
            $table->text('scheduled_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
