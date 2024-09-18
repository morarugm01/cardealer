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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->string('fuel_type');
            $table->enum('gear', ['manual','semi-automatic', 'automatic']);
            $table->string('traction');
            $table->integer('cubic_capacity');
            $table->integer('mileage');
            $table->foreignId('vehicle_model_id')->constrained()->onDelete('cascade');
            $table->date('production_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
