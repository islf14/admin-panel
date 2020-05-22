<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', function () { return view('publicpage.page'); });
Route::get('/welcome', function () { return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pupload', function () { return view('adminpanel.plantillas.form-uploads'); });

//Cliente solicitud
Route::get('/bienvenido', function () { return view('clientepanel.bienvenido'); })->name('bienvenido');
Route::get('/solicitud/create','SolicitudController@create')->name('solicitud.create');
Route::post('/solicitud/store','SolicitudController@store')->name('solicitud.store');


//Admin Tramite
Route::get('/tramites', 'TramiteController@index')->name('tramite.index');
Route::get('/inicio', function () { return view('adminpanel.admin.inicio'); })->name('inicio');
Route::get('/formulariotramite', function () { return view('prueba.index'); })->name('formulariotramite');


Route::get('/archivo/create', 'ArchivoController@create')->name('archivo.create');
Route::post('/archivo/store', 'ArchivoController@store')->name('archivo.store');


// Route::get('actividad','ActivityController@index')->name('activity.index')->middleware('permiso:activity.index');
//   Route::get('actividad/create','ActivityController@create')->name('activity.create')->middleware('permiso:activity.create');
//   Route::post('actividad/store','ActivityController@store')->name('activity.store')->middleware('permiso:activity.create');
//   Route::get('actividad/{id}','ActivityController@show')->name('activity.show')->middleware('permiso:activity.show');
//   Route::get('actividad/{id}/edit','ActivityController@edit')->name('activity.edit')->middleware('permiso:activity.edit');
//   Route::post('actividad/update/{id}','ActivityController@update')->name('activity.update')->middleware('permiso:activity.edit');
//   Route::get('actividad/delete/{id}','ActivityController@destroy')->name('activity.destroy')->middleware('permiso:activity.destroy');
