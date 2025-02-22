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
        Schema::create('usuarios', function (Blueprint $table) {
            $table -> id();
            $table -> string("nombre");
            $table -> string("apellido");
            $table -> integer("numero_documento");
            $table -> string("genero");
            $table -> string("telefono");
            $table -> string("email") -> unique();
            $table -> string("tipo_funcionario");
            $table -> string("rol");
            $table -> string("cargo");
            $table -> string("foto_perfil");
            $table -> string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
