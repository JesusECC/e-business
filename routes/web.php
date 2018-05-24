<?php

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
    return view('auth/login');
});

Route::resource('partner/usuario','PersonaController');
Route::resource('partner/clientes','ClienteController');
Route::resource('administrador/tipodocumento','TipodocumentoController');
Route::resource('administrador/comprobante','TipoComprobanteController');
Route::resource('administrador/usuario','UsuarioController');
Route::resource('administrador/tipopago','TipoPagoController');
Route::resource('administrador/tipopersona','TipoPersonaController');
Route::resource('administrador/partner','PersonaController');
Route::resource('administrador/estado','EstadoController');
//Route::resource('','HomeController');
Route::auth();
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/{str_slug($url)?}', 'HomeController@index');
//Route::get('/home', 'AdminController@index')->name('welcome');