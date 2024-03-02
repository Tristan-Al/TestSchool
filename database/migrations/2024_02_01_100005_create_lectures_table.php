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

            $table->foreignId('group_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('subject_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('professor_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('hours');

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
