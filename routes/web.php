<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// RUTAS PARA INICIAR SESION
Route::controller(InicioSesionController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'validacion')->name('validacion-sesion');
    Route::post('/singout', 'cerrarsesion')->name('cerrar-sesion');
});


Route::middleware('auth')->group(function () {
    // RUTAS DE INICIO
    Route::controller(PaginaController::class)->group(function () {
        Route::get('/pagina-inicio', 'index')->name("pagina-inicio");
        Route::get('/pagina-configuracion', 'show')->name("pagina-configuracion");
    });
});

Route::middleware(['auth', 'can:usuarios'])->group(function () {
    // RUTAS DE CONFIGURACION DE USUARIOS
    Route::resource("usuarios", UsuariosController::class)->names("usuarios");
    Route::put('usuarios/{id}/edit', [UsuariosController::class, 'edit'])->name("usuarios.edit");
});
