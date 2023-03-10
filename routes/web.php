<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//*rutas para cada controlador
//*/
Route::resource('personas', \App\Http\Controllers\PersonaController::class);

Route::resource('roles', \App\Http\Controllers\RoleController::class);

Route::resource('especialidades', \App\Http\Controllers\EspecialidadeController::class);

Route::resource('citas', \App\Http\Controllers\CitaController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



