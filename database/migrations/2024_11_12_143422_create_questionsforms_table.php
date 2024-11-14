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
        Schema::create('questionsforms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_form')->nullable();
            $table->foreign('id_form')->references('id')->on('forms');
            $table->unsignedBigInteger('id_question');
            $table->foreign('id_question')->references('id')->on('questions');
            $table->unsignedBigInteger('id_section');
            $table->foreign('id_section')->references('id')->on('sections');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionsforms');
    }
};
