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

Route::get('/admin', function() {
	return view ('admin.dashboard');
});

//CRUD PRODUCTOS
Route::get('/admin/productos','ProductosController@index'); //listado
Route::get('/admin/productos/agregar','ProductosController@agregar'); //crear producto
Route::post('/admin/productos','ProductosController@guardar'); //guardar el producto

Route::get('/admin/productos/{id}/verprod','ProductosController@verprod');

Route::get('/admin/productos/{id}/editar','ProductosController@editar'); //editar producto
Route::post('/admin/productos/{id}/actualizar','ProductosController@actualizar'); //actualizar producto

//CRUD CLIENTES

Route::get('/admin/clientes','ClientesController@index'); //listado de clientes
Route::get('/admin/clientes/agregar','ClientesController@agregar'); //crear nuevo clientes
Route::post('/admin/clientes','ClientesController@guardar'); //guardar el nuevo cliente

Route::get('/admin/clientes/{id}/verclient','ClientesController@verclient'); // ver detalles del cliente

Route::get('/admin/clientes/{id}/editar','ClientesController@editar'); //editar cliente
Route::post('/admin/clientes/{id}/actualizar','ClientesController@actualizar'); //actualizar cliente


//PROFILE
Route::get('/admin/profile', 'profileController@index');
Route::post('/admin/avatarchan','profileController@avatarchange');

//GUARDAR REGISTROS DE LOS REPORTES
Route::post('carga/reporte/inventario','InventarioController@guardarpost');
//MOSTRAR LOS REPORTES
Route::get('/admin/reportes/inventario','ReportesController@inventariofechas');
Route::post('/admin/reportes/repinventario','ReportesController@rep_inventario');
