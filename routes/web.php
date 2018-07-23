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
Route::post('/admin/productos/{id}/actualizar','ProductosController@actualizar'); //editar producto

//CRUD CLIENTES

Route::get('/admin/clientes','ClientesController@index'); //listado de clientes
Route::get('/admin/clientes/agregar','ClientesController@agregar'); //crear nuevo clientes
Route::post('/admin/clientes','ClientesController@guardar'); //guardar el nuevo cliente


//POST VALORES DE INVENTARIO APP ACCESS

Route::post('/admin/rep_inventario', 'InventarioController@guardarpost');