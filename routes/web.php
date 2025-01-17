<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;

// RUTAS PARA INICIAR SESION
Route::middleware('throttle:5')->group(function () {  // Limita la cantidad de solicitudes que un usuario pues hacer
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'validacion')->name('validacion-sesion');
        Route::post('/singout', 'cerrarsesion')->name('cerrar-sesion');
    });
});




Route::middleware(['auth'])->group(function () {
    // RUTAS DE INICIO
    Route::controller(HomePageController::class)->group(function () {
        Route::get('/home-page', 'index')->name("home-page");
        Route::post('/home-page', 'store')->name("respuesta_formularios");

        Route::get('/settings-view', 'show')->name("settings-view");
    });
});

Route::middleware(['auth', 'can:usuarios'])->group(function () { // Bloquea las rutas según el rol que tenga el permiso para acceder a usuarios
    // RUTAS DE CONFIGURACION DE USUARIOS
    Route::resource("usuarios", UsersController::class)->names("usuarios");

    Route::get('usuarios/papelera', [UsersController::class, 'papelera'])->name("usuarios.papelera");
    Route::put('usuarios/{id}/edit', [UsersController::class, 'edit'])->name("usuarios.edit");
});

Route::middleware(['auth'])->group(function () {
    Route::resource('template', TemplateController::class)->names('template');
    // Se llama esta ruta en la función de crear nuevo campo en la vista de la plantilla
    Route::post('template/store', [TemplateController::class, 'guardarPreguntas'])->name("template.guardarPreguntas");
    Route::post('template', [TemplateController::class, 'crearFormulario'])->name("template.crearFormulario");
});
