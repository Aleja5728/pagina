<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// RUTAS PARA INICIAR SESION
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'validacion')->name('validacion-sesion');
    Route::post('/singout', 'cerrarsesion')->name('cerrar-sesion');
});


Route::middleware('auth:sanctum')->group(function () {
    // RUTAS DE INICIO
    Route::controller(HomePageController::class)->group(function () {
        Route::get('/home-page', 'index')->name("home-page");
        Route::get('/settings-view', 'show')->name("settings-view");
    });
});

Route::middleware(['auth', 'can:usuarios'])->group(function () {
    // RUTAS DE CONFIGURACION DE USUARIOS
    Route::resource("usuarios", UsersController::class)->names("usuarios");
    
    Route::get('usuarios/papelera', [UsersController::class, 'papelera'])->name("usuarios.papelera");
    Route::put('usuarios/{id}/edit', [UsersController::class, 'edit'])->name("usuarios.edit");
    
});

Route::middleware(['auth'])->group(function(){
    Route::resource('template', TemplateController::class)->names('template');
});
