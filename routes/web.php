<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

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
//User
Route::get('/', [InicioController::class, 'WelcomeStore']);

Route::get('/contacto', [ContactoController::class, 'IndexContacto']);

//Admin
Route::get('admin', [InicioController::class, 'WelcomeAdmin']);

//Admin Contacto
Route::get('admin/contacto', [ContactoController::class, 'Index'])->name('contacto.Index');

Route::get('admin/contacto/agregar', [ContactoController::class, 'Create'])->name('contacto.Create');
Route::post('admin/contacto', [ContactoController::class, 'Store'])->name('contacto.Store');

Route::get('admin/contacto/mostrar/{contact}', [ContactoController::class, 'Show'])->name('contacto.Show');

Route::get('admin/contacto/editar/{contact}', [ContactoController::class, 'Edit'])->name('contacto.Edit');
Route::put('admin/contacto/{contact}', [ContactoController::class, 'Update'])->name('contacto.Update');

Route::get('admin/contacto/eliminar/{contact}', [ContactoController::class, 'Delete'])->name('contacto.Delete');
Route::delete('admin/contacto/{contact}', [ContactoController::class, 'Destroy'])->name('contacto.Destroy');

//Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
