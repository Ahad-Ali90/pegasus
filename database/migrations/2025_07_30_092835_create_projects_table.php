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
        Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('name');                // Project name
        $table->text('description');           // Detailed description
        $table->json('keypoints')->nullable(); // Store key points as JSON array
        $table->json('techs')->nullable();     // Store technologies as JSON array
        $table->json('images')->nullable(); 
        $table->integer('position')->default(0);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
