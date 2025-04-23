<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

Route::prefix('usuarios')
->name('usuarios.')
->controller(UsuariosController::class)->group(function () {
    Route::get('/index', 'index')->name('index'); // Lista todos los usuarios
    Route::get('/create', 'create')->name('create'); // Muestra el formulario para crear un usuario
    Route::post('/store', 'store')->name('store'); // Crea un nuevo usuario
    Route::get('/show/{id}', 'show')->name('show'); // Muestra un usuario
    Route::get('/edit/{id}', 'edit')->name('edit'); // Muestra el formulario para editar un usuario
    Route::post('/update/{id}', 'update')->name('update'); // Actualiza un usuario
    Route::get('/destroy/{id}', 'destroy')->name('destroy'); // Elimina un usuario
});