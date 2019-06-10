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


Route::get('/', 'ControllerUsuariosVehiculos@Informeview')->name('Index');
Route::get('/Informe', 'ControllerUsuariosVehiculos@InformeTotal')->name('Informe');
Route::get('/UsuariosVehiculos', 'ControllerUsuariosVehiculos@index')->name('UsuariosVehiculos');
Route::get('/Vehiculos', 'ControllerVehiculos@index')->name('ControllerVehiculos');
Route::get('/show', 'ControllerVehiculos@show')->name('show');
Route::post('/registrar', 'ControllerVehiculos@registrar')->name('registrar');
Route::post('/eliminar', 'ControllerVehiculos@eliminar')->name('registrar');
Route::post('/EditAutos', 'ControllerVehiculos@edit')->name('EditAutos');
Route::post('/update', 'ControllerVehiculos@update')->name('Edit');
Route::post('/showU', 'ControllerUsuariosVehiculos@show')->name('showU');
Route::post('/propietariosave', 'ControllerUsuariosVehiculos@propietariosave')->name('propietariosave');
Route::post('/conductorsave', 'ControllerUsuariosVehiculos@conductorsave')->name('conductorsave');
Route::post('/Deleteconductor', 'ControllerUsuariosVehiculos@elminarconductor')->name('Deleteconductor');
Route::post('/Deletepropietario', 'ControllerUsuariosVehiculos@elminarpropietario')->name('Deletepropietario');




/*
elminarpropietario
elminarconductor
*/



// Route::post('/propietariosave', 'ControllerUsuariosVehiculos@propietariosave')->name('showU');
//show
//EditAutos