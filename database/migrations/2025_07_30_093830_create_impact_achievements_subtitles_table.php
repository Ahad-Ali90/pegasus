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
        Schema::create('impact_achievements_subtitles', function (Blueprint $table) {
            $table->id();
            $table->string('subtitles'); // Example: System Performance
            $table->json('keypoints'); // Store subtitles and keypoints as JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impact_achievements_subtitles');
    }
};
