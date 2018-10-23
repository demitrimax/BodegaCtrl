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

Route::middleware(['admin'])->group( function() {
  Route::get('/admin', 'AdminController@index');
  //CRUD PRODUCTOS
  Route::get('/admin/productos','ProductosController@index'); //listado
  Route::get('/admin/productos/agregar','ProductosController@agregar'); //crear producto
  Route::post('/admin/productos','ProductosController@guardar'); //guardar el producto

  Route::get('/admin/productos/{id}/verprod','ProductosController@verprod');

  Route::get('/admin/productos/{id}/editar','ProductosController@editar'); //editar producto
  Route::post('/admin/productos/{id}/actualizar','ProductosController@actualizar'); //actualizar producto

  //CRUD CLIENTES

  Route::get('/admin/clientes','ClientesController@index'); //listado de clientes
  Route::get('/admin/clientes/agregar','ClientesController@agregar'); //crear nuevo cliente
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
  Route::post('/admin/reportes/repinventario/pdf','ReportesController@rep_inventarioPDF');
  Route::post('/admin/reportes/repinventario/print','ReportesController@rep_inventarioPRINT');
  //reportes financieros
  Route::get('admin/reportes/financiero', 'ReportesController@financierofechas');
  Route::post('admin/reportes/repfinanciero', 'ReportesController@rep_financiero');
  Route::post('/admin/reportes/repfinanciero/pdf','ReportesController@rep_financieroPDF');
  Route::post('/admin/reportes/repfinanciero/print','ReportesController@rep_financieroPRINT');

  //CRUD USUARIOS
  Route::get('admin/usuarios','UsuariosController@index');
  Route::get('admin/usuario/{id}/editar', 'UsuariosController@editar');
  Route::post('admin/usuario/{id}/actualizar', 'UsuariosController@actualizar');
  Route::get('admin/usuario/agregar', 'UsuariosController@agregar');
  Route::post('admin/usuario/guardar', 'UsuariosController@guardar');
  
  //CRUD CATEGORIAS
  Route::get('admin/categorias','CategoriasController@index'); 
  Route::get('admin/categorias/agregar','CategoriasController@agregar');
  Route::post('admin/categorias/guardar', 'CategoriasController@guardar');
  Route::get('admin/categorias/{id}/eliminar','CategoriasController@eliminar');

  //AJAX REPORTES
  Route::get('ajax-fechastiendas', 'ReportesController@ajaxtiendasfechas');
  Route::get('ajax-fechastiendasventas', 'ReportesController@ajaxtiendasfechasventas');




});

