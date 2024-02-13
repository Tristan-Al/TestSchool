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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();

            $table->string('usuarioSeneca', 10)->unique(); // input type text VALIDAR
            $table->string('nombre', 60); // input type text
            $table->string('apellido1', 60); // input type text
            $table->string('apellido2', 60); // input type text
            $table->string('especialidad', 60); // hacer con un select con 2 opciones

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};
