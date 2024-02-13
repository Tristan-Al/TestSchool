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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();

            $table->string('cursoEscolar', 7); // string no me convence mucho, pero deberia servir??? VALIDAR
            $table->foreignId('formacion_id')->constrained(); // estoy usando Slug_ porque creo que si no Laravel pierde la cabeza
            $table->integer('curso'); // select con opciones? si sabeis modificar las opciones que aparecen segun la formacion 👍, si no, un input type number validado deberia ir bien
            $table->string('denominacion', 60); // input type text
            $table->string('turno', 10); // hacer con un select con 2 opciones

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
