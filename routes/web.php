<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*PAGINA PRINCIPAL*/
Route::get('/', function() {
    return view('home');
});

/* USUARIOS */
/* Registrar usuarios */
Route::get('/admin/register-users', [UsuarioController::class, 'create'])->name('users.create');
Route::post('/admin/register-users', [UsuarioController::class, 'store'])->name('users.store');
/* Listar usuarios */
Route::get('/admin/config-users', [UsuarioController::class, 'index'])->name('users.config');

/* Actualizar usuarios */
Route::get('/admin/update-users', [UsuarioController::class, 'update'])->name('');
Route::post('/admin/update-users', [UsuarioController::class, 'update'])->name('');

/* Eliminar usuarios */
Route::post('/admin/delete-users', [UsuarioController::class, 'delete'])->name('');

/* CATALOGOS */
Route::get('/catalogue', [CatalogoController::class, 'index'])->name('catalogo.index');

/* INDEX */
Route::get('/index', function() {
    return view('index');
});

