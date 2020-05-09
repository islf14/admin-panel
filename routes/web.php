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


Route::get('/w', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('publicpage.page');
});

Route::get('/pupload', function () { return view('adminpanel.plantillas.form-uploads'); });

Route::get('/admin', function () {
    return view('adminpanel.admin.inicio');
})->name('admin');

Route::get('/formulariotramite', function () {return view('prueba.index');})->name('formulariotramite');

Route::get('/archivo/create', 'ArchivoController@create')->name('archivo.create');
Route::post('/archivo/store', 'ArchivoController@store')->name('archivo.store');