<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;

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
Route::get('/', [HomeController::class, 'Index']);

Route::get('/productos', [ProductController::class, 'Index']);

Route::get('/cotizacion', [QuoteController::class, 'Index']);

Route::get('/contacto', [ContactoController::class, 'Index']);

Route::get('/nosotros', [HistoryController::class, 'Index']);

//Admin

Route::get('admin', [App\Http\Controllers\Admin\HomeController::class, 'Index'])->name('inicio.Index');

//Admin Contacto
Route::get('admin/contacto', [App\Http\Controllers\Admin\ContactoController::class, 'Index'])->name('contacto.Index');

Route::get('admin/contacto/agregar', [App\Http\Controllers\Admin\ContactoController::class, 'Create'])->name('contacto.Create');
Route::post('admin/contacto', [App\Http\Controllers\Admin\ContactoController::class, 'Store'])->name('contacto.Store');

Route::get('admin/contacto/mostrar/{contact}', [App\Http\Controllers\Admin\ContactoController::class, 'Show'])->name('contacto.Show');

Route::get('admin/contacto/editar/{contact}', [App\Http\Controllers\Admin\ContactoController::class, 'Edit'])->name('contacto.Edit');
Route::put('admin/contacto/{contact}', [App\Http\Controllers\Admin\ContactoController::class, 'Update'])->name('contacto.Update');

Route::get('admin/contacto/eliminar/{contact}', [App\Http\Controllers\Admin\ContactoController::class, 'Delete'])->name('contacto.Delete');
Route::delete('admin/contacto/{contact}', [App\Http\Controllers\Admin\ContactoController::class, 'Destroy'])->name('contacto.Destroy');

//Admin Producto
Route::get('admin/productos', [App\Http\Controllers\Admin\ProductController::class, 'Index'])->name('Productos.Index');

Route::get('admin/producto/agregar', [App\Http\Controllers\Admin\ProductController::class, 'Create'])->name('Productos.Create');
Route::post('admin/producto', [App\Http\Controllers\Admin\ProductController::class, 'Store'])->name('Productos.Store');

Route::get('admin/producto/mostrar/{product}', [App\Http\Controllers\Admin\ProductController::class, 'Show'])->name('Productos.Show');

Route::get('admin/producto/editar/{product}', [App\Http\Controllers\Admin\ProductController::class, 'Edit'])->name('Productos.Edit');
Route::put('admin/producto/{product}', [App\Http\Controllers\Admin\ProductController::class, 'Update'])->name('Productos.Update');

Route::get('admin/producto/eliminar/{product}', [App\Http\Controllers\Admin\ProductController::class, 'Delete'])->name('Productos.Delete');
Route::delete('admin/producto/{product}', [App\Http\Controllers\Admin\ProductController::class, 'Destroy'])->name('Productos.Destroy');

//Admin Users
Route::get('admin/usuarios', [App\Http\Controllers\Admin\UserController::class, 'Index'])->name('Usuarios.Index');

Route::get('admin/usuario/agregar', [App\Http\Controllers\Admin\UserController::class, 'Create'])->name('Usuarios.Create');
Route::post('admin/usuario', [App\Http\Controllers\Admin\UserController::class, 'Store'])->name('Usuarios.Store');

Route::get('admin/usuario/mostrar/{user}', [App\Http\Controllers\Admin\UserController::class, 'Show'])->name('Usuarios.Show');

Route::get('admin/usuario/editar/{user}', [App\Http\Controllers\Admin\UserController::class, 'Edit'])->name('Usuarios.Edit');
Route::put('admin/usuario/{user}', [App\Http\Controllers\Admin\UserController::class, 'Update'])->name('Usuarios.Update');

Route::get('admin/usuario/eliminar/{user}', [App\Http\Controllers\Admin\UserController::class, 'Delete'])->name('Usuarios.Delete');
Route::delete('admin/usuario/{user}', [App\Http\Controllers\Admin\UserController::class, 'Destroy'])->name('Usuarios.Destroy');

Route::get('/test', function(){

    /**
     *  Return Role::create([
        'name'=>'Admin',
        'slug'=>'admin',
        'description'=>'Administrator',
        'full-access'=>'yes'
    ]);
     */
    Return Role::create([
        'name'=>'Guest',
        'slug'=>'guest',
        'description'=>'Guest',
        'full-access'=>'no'
    ]);

});

//Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
