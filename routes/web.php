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

Route::group(['middleware' => 'auth'], function () {
       // Route::get('/link1', function ()    {
       // Uses Auth Middleware
   // });
 
    // Modulos
		Route::resource('materias', 'MateriaController');
    Route::resource('contenidos', 'ContenidoController');
    Route::resource('clases', 'ClaseController');


    // Reportes PDF
		Route::resource('reportes', 'PDFController');
    Route::get('crear_reporte_materias/{tipo}', 'PdfController@crear_reporte_materias');

    // Reportes Gráficas
    Route::get('listado_graficas', 'GraficasController@index');
    Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');

  
		   
		
		
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
  