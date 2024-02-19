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

            $table->foreignId('formation_id')->constrained();
            $table->string('denomination', 60); // input type text
            $table->string('acronym', 10); // input type text
            $table->integer('year'); // select con opciones? si sabeis modificar las opciones que aparecen segun la formacion 👍, si no, un input type number validado deberia ir bien
            $table->integer('hours'); // input type number
            $table->string('speciality', 60); // hacer con un select con 2 opciones

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
