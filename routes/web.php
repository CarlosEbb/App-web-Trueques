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

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/mapa', function () {
    return view('mapa');
});

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('home', 'HomeController@index');

Route::resource('productos', ProductoController::class);
Route::resource('categorias', CategoriaController::class);


