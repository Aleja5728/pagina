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


// RUTAS PARA EL CREADOR
Route::group(['middleware' => 'auth'], function () {
    Route::get('/pagina-inicio', [PaginaController::class, 'index'])->name("pagina-inicio");
    Route::get('/pagina-configuracion', [PaginaController::class, 'show'])->name("pagina-configuracion");
});


// RUTAS PARA EL ADMINISTRADOR
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //Ruta agrupada de configuración de usuarios
    Route::resource('usuarios', UsuariosController::class) -> names('usuarios');
    // Ruta para acceder a ruta de editar usuario
    Route::put('usuarios/{id}/edit', [UsuariosController::class, 'edit'])->name("editar_usuarios");
});