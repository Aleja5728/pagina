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
        // Tabla para conteo de respuestas
        Schema::create('formsanswers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_form');
            $table->timestamps();

            $table->foreign('id_form')->references('id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formsanswers');
    }
};
