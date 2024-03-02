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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();

            $table->string('school_year', 7);
            $table->foreignId('formation_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('year');
            $table->string('denomination', 60);
            $table->enum('shift', ['morning', 'afternoon']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
