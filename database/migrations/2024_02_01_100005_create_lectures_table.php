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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();

            // Lo del slug_, laravel lo necesita ya que lo que estás diciéndole a laravel es, <nombre_tabla>_<clave_primaria_tabla_foránea>
            $table->foreignId('group_id')->constrained(); // estoy usando Slug_ porque creo que si no Laravel pierde la cabeza
            $table->foreignId('subject_id')->constrained(); // estoy usando Slug_ porque creo que si no Laravel pierde la cabeza
            $table->foreignId('professor_id')->constrained(); // estoy usando Slug_ porque creo que si no Laravel pierde la cabeza
            $table->integer('hours'); // input type number

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lectures');
    }
};
