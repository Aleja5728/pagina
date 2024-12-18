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
        Schema::create('questions', function (Blueprint $table) {
            $table->id(); // Identificador de la pregunta
            $table->string('texto_de_pregunta'); // Texto que contiene la pregunta
            $table->string('tipo_de_pregunta');
            $table->boolean('visible')->default(false); // Indica si la pregunta esta activa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
