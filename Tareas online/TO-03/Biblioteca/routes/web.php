<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\AlquileresController;
use App\Http\Controllers\UsuariosController;

Route::get('/setup', [SetupController::class, 'setup']);
Route::post('/setup', [SetupController::class, 'setup'])->name('setup');
Route::resource('autores', AutoresController::class);
Route::resource('libros', LibrosController::class);
Route::resource('alquileres', AlquileresController::class);
Route::resource('usuarios', UsuariosController::class);
Route::get('/autores', [AutoresController::class, 'index'])->name('autores.index');
Route::get('/libros', [LibrosController::class, 'index'])->name('libros.index');
Route::get('/alquileres', [AlquileresController::class, 'index'])->name('alquileres.index');
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

Route::get('autores/{id}/edit', [AutoresController::class, 'edit'])->name('autores.edit');
Route::put('autores/{id}', [AutoresController::class, 'update'])->name('autores.update');

Route::get('libros/{id}/edit', [LibrosController::class, 'edit'])->name('libros.edit');
Route::put('libros/{id}', [LibrosController::class, 'update'])->name('libros.update');

Route::get('alquileres/{id}/edit', [AlquileresController::class, 'edit'])->name('alquileres.edit');
Route::put('alquileres/{id}', [AlquileresController::class, 'update'])->name('alquileres.update');

Route::get('usuarios/{id}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('usuarios/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');

Route::get('usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');

Route::get('libros/create', [LibrosController::class, 'create'])->name('libros.create');
Route::post('libros', [LibrosController::class, 'store'])->name('libros.store');

Route::get('alquileres/create', [AlquileresController::class, 'create'])->name('alquileres.create');
Route::post('alquileres', [AlquileresController::class, 'store'])->name('alquileres.store');

Route::get('autores/create', [AutoresController::class, 'create'])->name('autores.create');
Route::post('autores', [AutoresController::class, 'store'])->name('autores.store');

Route::view('/', 'index')->name('index');
