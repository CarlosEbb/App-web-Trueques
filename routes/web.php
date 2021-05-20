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

Route::get('/politica-privacidad', function () {
    return view('politicas');
});

Route::get('/condiciones-uso', function () {
    return view('condiciones-uso');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/preguntas-frecuentes', function () {
    return view('preguntas-frecuentes');
});

Route::get('/consejos-seguridad', function () {
    return view('consejos-seguridad');
});

Route::get('/reglas', function () {
    return view('reglas');
});

Route::get('/mapa', function () {
    return view('mapa');
});

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('home', 'HomeController@index');

Route::post('/subir', 'HomeController@upload');

Route::post('/adjuntar', 'HomeController@adjuntar');



Route::resource('productos', ProductoController::class);
Route::resource('favoritos', ProductoFavoritoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('subcategorias', SubCategoriaController::class);
Route::resource('users', UserController::class);
Route::resource('comentarios', ComentarioController::class);
Route::resource('payment', PagoController::class);
Route::resource('ventas', VentasController::class);
Route::resource('otros', OtrosController::class);

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

Route::get("prueba", "HomeController@prueba")->name('prueba');



//socialite
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/password/reset/{token}/{email}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');


Route::get("chat", "HomeController@chat")->name('chat');

Route::get("busqueda", "ProductoController@busqueda")->name('busqueda');

Route::get("listarProductosPorUsuario/{id}", "ProductoController@listarProductosPorUsuario");


Route::post("subirFoto", "HomeController@subirFoto")->name('subirFoto');

Route::get("editarIntereses/{id}/{nroInteres}", "ProductoController@editarIntereses")->name('editarIntereses');

Route::get("editarProductos", "ProductoController@editarProductos")->name('editarProductos');

Route::get("intercambios", "ProductoController@intercambios")->name('intercambios');

Route::get("publicaciones/{id}", "ProductoController@publicaciones")->name('publicaciones');

Route::get("productosPorCategoriaAdmin/{id}", "ProductoController@productosPorCategoriaAdmin")->name('productosPorCategoriaAdmin');

Route::get("consultas", 'HomeController@consultas')->name('consultas');

Route::post("exportarData", 'HomeController@exportarData')->name('exportarData');

Route::post("DestacarProducto", 'ProductoController@DestacarProducto')->name('DestacarProducto');

Route::post("registrar", 'UserController@registrar')->name('registrar');


