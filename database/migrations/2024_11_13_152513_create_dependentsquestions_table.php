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
        Schema::create('dependentsquestions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mainquestion')->nullable();
            $table->foreign('id_mainquestion')->references('id')->on('questions');
            $table->string('condition');
            $table->unsignedBigInteger('id_dependentquestion')->nullable();
            $table->foreign('id_dependentquestion')->references('id')->on('questions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependentsquestions');
    }
};
