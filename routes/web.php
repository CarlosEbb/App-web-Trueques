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

Route::get('/prueba2', function () {
    return view('prueba2');
});

Route::get('/mapa', function () {
    return view('mapa');
});

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('home', 'HomeController@index');

Route::post('/subir', 'HomeController@upload');



Route::resource('productos', ProductoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('users', UserController::class);

// productos usuarios 
Route::get('publicar-productos', function () {
    return view('/users/publicarProductos');
});

//socialite
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::post('addFavoritos','HomeController@addFavoritos');

Route::get('/password/reset/{token}/{email}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');