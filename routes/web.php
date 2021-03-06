<?php

use App\Http\Controllers\tblProyectoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/offline', function () {
    return view('/resources/views/vendor/laravelpwa/offline.blade.php');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('proyecto', App\Http\Controllers\tblProyectoController::class, );
Route::resource('tbl-proyecto', 'tblProyectoController')->middleware('auth');
//Route::get('tbl-proyecto', 'tblProyectoController@index');
//Route::resource('tipo_-comidas', 'Tipo_ComidasController');