<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CategoriaEmpresaController;
use App\Http\Controllers\ProductoController;

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
//Iniciar sesion
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'validacion']);

/* Inicio */
Route::get('/index', [InicioController::class, 'index'])->name('index');

//Cerrar sesion
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/* USUARIOS */
//Pagina principal
Route::get('/admin/user/index', [UsuarioController::class, 'index'])->name('users.config');

/* Registrar usuarios */
Route::get('/admin/user/register', [UsuarioController::class, 'create'])->name('users.create');
Route::post('/admin/user/register', [UsuarioController::class, 'store'])->name('users.store');

/* Actualizar usuarios */
Route::get('/admin/user/edit/{$id}', [UsuarioController::class, 'edit'])->name('users.edit');
Route::post('/admin/user/edit', [UsuarioController::class, 'update'])->name('users.update');

/* Eliminar usuarios */
Route::post('/admin/user/delete', [UsuarioController::class, 'delete'])->name('users.delete');

/* CATALOGOS */
Route::get('/catalogue/index', [CatalogoController::class, 'index'])->name('catalogo.index');

/* EMPRESAS */
//Pagina Principal
Route::get('/company/index', [EmpresaController::class, 'index'])->name('empresas.index');

//Pagina para crear
Route::get('/company/create', [EmpresaController::class, 'create'])->name('empresas.create');
Route::post('/company/create', [EmpresaController::class, 'store'])->name('empresas.store');

//Pagina para actualizar
Route::get('/company/update', [EmpresaController::class, 'update'])->name('empresas.update');
Route::post('/company/update', [EmpresaController::class, 'update'])->name('empresas.update');

//Pagina para mostrar resultado
Route::get('/company/show', [EmpresaController::class, 'show'])->name('empresas.show');

//Pagina para mostrar la clasificacion
Route::get('/company/category', [EmpresaController::class, 'category'])->name('empresas.category');

/* CATEGORIA DE LAS EMPRESAS */
//Pagina principal
Route::get('/company/category/index', [CategoriaEmpresaController::class, 'index'])->name('category.index');


/* Paginacion de productos */

//Pagina principal
Route::get('/product/index', [ProductoController::class, 'index'])->name('producto.index');

//Catalogo de productos
Route::get('/product/catalogue/index', [ProductoController::class, 'catalogue'])->name('producto.catalogo.index');

// Route::get();
// Route::get();