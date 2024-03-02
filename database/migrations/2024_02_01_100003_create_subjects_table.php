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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('formation_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('denomination', 60);
            $table->string('acronym', 10);
            $table->integer('year');
            $table->integer('hours');
            $table->enum('speciality', ['secondary', 'vocational_training']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
