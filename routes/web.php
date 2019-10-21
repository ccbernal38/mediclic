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

Route::get('/home', 'HomeController@index')->name('home')->middleware('register');

//-----------------------------------------Usuario-----------------------------------------------------

Route::get('usuario/register','UserController@create')->name('user_register');

Route::get('usuario/register_complete','UserController@createComplete')->name('user_register_complete');

//-----------------------------------------Producto----------------------------------------------------

Route::resource('producto', 'ProductoController');
Route::resource('laboratorio', 'LaboratorioController');

Route::get('/getAllProductos', 'ProductoController@getAll');
Route::get('/getAllLaboratorios', 'LaboratorioController@getAll');

