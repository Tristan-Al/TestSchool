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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();

            $table->string('senecaUser', 10)->unique(); // input type text VALIDAR
            $table->string('name', 60); // input type text
            $table->string('surname1', 60); // input type text
            $table->string('surname2', 60); // input type text
            $table->string('speciality', 60); // hacer con un select con 2 opciones

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
