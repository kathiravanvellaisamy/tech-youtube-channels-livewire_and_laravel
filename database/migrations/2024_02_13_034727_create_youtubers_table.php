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
        Schema::create('youtubers', function (Blueprint $table) {
            $table->id();
            $table->string('youtube_name');
            $table->string('channel_link');
            $table->string('owner_name');
            $table->string('country');
            $table->string('github');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youtubers');
    }
};
