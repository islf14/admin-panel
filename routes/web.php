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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/w', function () { return view('welcome'); });
Route::get('/', function () { return view('publicpage.page'); });

Route::get('/pupload', function () { return view('adminpanel.plantillas.form-uploads'); });

//Cliente tramite
Route::get('/bienvenido', function () { return view('clientepanel.bienvenido'); })->name('bienvenido');
Route::get('/tramite/create','TramiteController@create')->name('tramite.create');
Route::post('/tramite/store','TramiteController@store')->name('tramite.store');


Route::get('raiz/abc', function () { return view('adminpanel.admin.inicio'); })->name('admin');
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
