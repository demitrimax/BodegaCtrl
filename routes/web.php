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

Route::get('admin/productos','ProductosController@index'); //listado
Route::get('admin/productos/agregar','ProductosController@agregar'); //crear producto
Route::post('admin/productos','ProductosController@guardar'); //guardar el producto
Route::get('admin/productos/editar',''); //editar producto
Route::get('admin/productos/eliminar',''); //eliminar producto
