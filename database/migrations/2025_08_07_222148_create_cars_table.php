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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., Saloon Car
            $table->string('slug')->unique(); // for dynamic routes like /cars/saloon-car
            $table->string('model'); // e.g., Saloon Car
            $table->integer('price'); // e.g., Saloon Car
            $table->integer('price_per_hour'); // e.g., Saloon Car
            $table->string('main_image'); // main car image path
            $table->text('short_description'); // small paragraph under title
            $table->integer('position')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
