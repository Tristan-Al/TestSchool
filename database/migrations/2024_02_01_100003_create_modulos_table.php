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
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('formacion_id')->constrained();
            $table->string('denominacion', 60); // input type text
            $table->string('siglas', 10); // input type text
            $table->integer('curso'); // select con opciones? si sabeis modificar las opciones que aparecen segun la formacion 👍, si no, un input type number validado deberia ir bien
            $table->integer('horas'); // input type number
            $table->string('especialidad', 60); // hacer con un select con 2 opciones

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
