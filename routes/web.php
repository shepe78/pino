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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('plazas', 'PlazaController');
Route::resource('giros', 'GiroController');
Route::resource('grupos', 'GrupoController');
Route::resource('empresas', 'EmpresaController');
Route::resource('colaboradores', 'ColaboradorController');
Route::resource('clientes', 'ClienteController');
Route::resource('contactos', 'ContactoController');
Route::resource('informes', 'InformeController');
Route::resource('esquemas', 'EsquemaController');
Route::resource('facturas', 'FacturaController');
Route::resource('seguimientos', 'SeguimientoController');
Route::resource('expedientes', 'ExpedienteController');
Route::resource('reportes', 'ReporteController');
Route::resource('individuales', 'IndividualController');
Route::resource('empleados', 'EmpleadoController');
Route::resource('productos', 'ProductoController');
Route::resource('sucursales', 'SucursalController');
Route::resource('choferes', 'ChoferController');






Route::resource('ciudades', 'CiudadController');         

Route::PUT('ciudades/{id}', [
	'uses'=> 'CiudadController@update',
	'as'  => 'ciudades.update'
]);

Route::delete('ciudades/{id}', [
	'uses'=> 'CiudadController@destroy',
	'as'  => 'ciudades.destroy'			

]);


Route::resource('contratos', 'ContratoController');
Route::get('contratos/delete/{id}', [
	'uses'=> 'ContratoController@destroy',
	'as'  => 'contratos.destroy'

]);

Route::get('contratos','ContratoController@index')->name('contratos.index');

Route::get('/contratos/{id}/reenviar','ContratoController@reenviar')->name('contratos.reenviar');
Route::get('/contratos/{id}/validar','ContratoController@validar')->name('contratos.validar');
Route::PATCH('/contratos/{id}/rechazar','ContratoController@rechazar')->name('contratos.rechazar');
Route::PATCH('/contratos/{id}/liberar','ContratoController@liberar')->name('contratos.liberar');
Route::get('/contratos/{id}/firma_rl','ContratoController@firma_rl')->name('contratos.firma_rl');
Route::get('/contratos/{id}/firma_cliente','ContratoController@firma_cliente')->name('contratos.firma_cliente');
Route::get('/contratos/{id}/envia_firma_cl','ContratoController@envia_firma_cl')->name('contratos.envia_firma_cl');
Route::get('/contratos/{id}/envia_firma_rl','ContratoController@envia_firma_rl')->name('contratos.envia_firma_rl');




