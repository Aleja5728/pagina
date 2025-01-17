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
        Schema::create('forms_dependencies', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger('id_form');
            $table -> unsignedBigInteger('id_dependencia');
            $table->timestamps();

            $table -> foreign('id_form')->references('id')->on('forms');
            $table -> foreign('id_dependencia')->references('id')->on('dependencies');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms_dependencies');
    }
};
