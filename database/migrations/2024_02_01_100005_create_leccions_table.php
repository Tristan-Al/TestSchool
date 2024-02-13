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
        Schema::create('leccions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('grupo_id')->constrained(); // estoy usando Slug_ porque creo que si no Laravel pierde la cabeza
            $table->foreignId('modulo_id')->constrained(); // estoy usando Slug_ porque creo que si no Laravel pierde la cabeza
            $table->foreignId('profesor_id')->constrained(); // estoy usando Slug_ porque creo que si no Laravel pierde la cabeza
            $table->integer('horas'); // input type number

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leccions');
    }
};
