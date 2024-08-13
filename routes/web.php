<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::controller(InicioSesionController::class)->group(function () {
    Route::get('/login', 'index') -> name('login');
    Route::post('/login', 'validacion') -> name('validacion-sesion');
    Route::post('/singout', 'cerrarsesion') -> name('cerrar-sesion');
});

Route::controller(PaginaController::class)->group(function () {
    Route::get('/pagina-inicio', 'index')->name("pagina-inicio");
    Route::get('/pagina-configuracion', 'show')->name("pagina-configuracion");
});

Route::controller(UsuariosController::class)->group(function () {
    Route::get('/configuracion-usuarios', 'index')->name("configuracion-usuarios");
    Route::post('/configuracion-usuarios', 'store') -> name("registro_usuarios");
    Route::delete('/configuracion-usuarios/{id}', 'destroy') -> name("eliminar_usuarios");
    Route::put('/configuracion-usuarios/{id}/edit', 'edit') -> name("editar_usuarios");
    Route::put('/configuracion-usuarios/{id}', 'update') -> name("modificar_usuarios");
});
