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

Route::get('/mapa', function () {
    return view('mapa');
});

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('home', 'HomeController@index');

Route::post('/subir', 'HomeController@upload');



Route::resource('productos', ProductoController::class);
Route::resource('favoritos', ProductoFavoritoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('subcategorias', SubCategoriaController::class);
Route::resource('users', UserController::class);
Route::resource('comentarios', ComentarioController::class);

// productos usuarios 
Route::get('publicar-productos', function () {
    return view('/users/publicarProductos');
})->name('publicar-productos');

Route::get('productos', function () {
    return view('/users/productos');
});

Route::get('perfil', function () {
    return view('/users/perfil');
});

Route::get('configuracion', function () {
    return view('/users/configuracion');
});

Route::get('anuncios', function () {
    return view('/users/anuncios');
});

Route::get('cambios', function () {
    return view('/users/cambios');
});

Route::get('favoritos', function () {
    return view('/users/favoritos');
});

Route::get('planes', function () {
    return view('/users/planes');
});

Route::get('selecionar-categorias', function () {
    return view('/users/selecionarCategoria');
})->name('selecionar-categorias');

Route::get('prueba', function () {
    return view('/prueba');
})->name('prueba');



//socialite
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/password/reset/{token}/{email}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');


Route::get("chat", "HomeController@chat")->name('chat');

Route::get("busqueda", "ProductoController@busqueda")->name('busqueda');

Route::get("listarProductosPorUsuario/{id}", "ProductoController@listarProductosPorUsuario");

