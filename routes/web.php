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

Route::get('/getAllProductos', 'ProductoController@getAll');

//Route::get('ip',function() {
////   return $_SERVER['REMOTE_ADDR'];
////    $ipAddress=$_SERVER['REMOTE_ADDR'];
////    $arp=`arp -a $ipAddress`;
////    $lines=explode("\n", $arp);
////    return $lines;
////    return $_SERVER['HTTP_X_FORWARDED_FOR'];
//    return Request::getClientIp();
//});

