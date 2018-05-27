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
Auth::routes();
//rutas del partner
Route::resource('partner/usuario','PersonaController');
Route::resource('partner/clientes','ClienteController');
Route::resource('partner/evento','EventoController');
Route::resource('partner/paquete','PaqueteController');
Route::resource('partner/tipopaquete','TipopaqueteController');
//rutas del administrador
Route::resource('administrador/tipodocumento','TipodocumentoController');
Route::resource('administrador/comprobante','TipoComprobanteController');
Route::resource('administrador/usuario','UsuarioController');
Route::resource('administrador/tipopago','TipoPagoController');
Route::resource('administrador/tipopersona','TipoPersonaController');
Route::resource('administrador/partner','PersonaController');
Route::resource('administrador/estado','EstadoController');

Route::get('administrador/empresa/buscarPersona','EmpresaController@buscarpersona');
//Route::get('administrador/empresa/create/{id}/{no}/{dni}',function($id,$no,$dni){
    //$per=>['id'=>$id,'no'=>$no,'dni'=>$dni
  //  return view("administrador.empresa.create",[$id]);
//});
Route::get('/index1','HomeController@index1');
Route::resource('administrador/empresa','EmpresaController');



//Route::resource('','HomeController');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/{str_slug($url)?}', 'HomeController@index');
//Route::get('/home', 'AdminController@index')->name('welcome');