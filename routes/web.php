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


//guest significa que no estas logueado y te manda al login
Route::group(['middleware'=>'guest'],function(){
Route::get('/', function () {
    //return view('welcome');
   
    return view('auth/login');
	});
});
//auth significa que aqui entrran solo los usuarios logeados
Route::group(['middleware'=>'auth'],function(){
	//nombe de la ruta      nombre del controller
Route::resource('proveedor', 'ProveedorController');
Route::resource('producto', 'ProductoController');
Route::resource('stock', 'stockController');

Route::resource( 'view','ventasController');
Route::resource('kardex', 'controllerKardex');
Route::resource('RegistroCliente', 'clienteController');

Route::resource('compras', 'createcompraController');
Route::resource('listaCompra', 'detallecompraController');
Route::resource('cliente', 'clienteController');
Route::resource('referencia', 'referenciaController');
Route::resource('ventas', 'ventasController');
Route::resource('tempoventa', 'listavenController');


//Route::resource('Detalle', 'detalleController');

//Route::resource('Factura', 'facturaController');
//Route::resource('DetalleFactura', 'facturadetalleController');
Route::resource('inicio', 'login');

Route::get('/home', 'HomeController@index');
Route::match(['get','post'],'reporteProvee','ProveedorController@reporte');
Route::match(['get','post'],'reporteCompra','createcompraController@create2');
Route::match(['get','post'],'reporteCompra2','createcompraController@reporte');
Route::resource('marca', 'marcaController');
Route::match(['get','post'],'buscarMarca/{id}','ventasController@buscarXMarca');
Route::match(['get','post'],'llenarProducto/{id}','ventasController@llenarXProducto');
Route::match(['get','post'],'capCre/{id}','ventasController@capacidad');
Route::match(['get','post'],'reporteCompra3','createcompraController@reporte2');
Route::match(['get','post'],'reporteClienteA','ClienteController@vistaClienteReporte');
Route::match(['get','post'],'reporteCliente','ClienteController@reporte');
Route::match(['get','post'],'reporteCliente2','ClienteController@reporte2');
Route::match(['get','post'],'reporteKardex','ProductoController@reporte');
Route::match(['get','post'],'reporteCompra2','createcompraController@reporte');
//deyvis

//tony

});



//te importa todas las rutas de los controladores
Auth::routes();

