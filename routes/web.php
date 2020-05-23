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
Route::get('/chat', function () {
   return view('public.chat'); 
});
Route::get('/', function () {
    return view('public.home'); 
 });
Route::group(['prefix' => 'home' , 'middleware'=>'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('hola', 'HomeController@index')->name('home.prueba');
    
});

Route::group(['prefix' => 'cpanel', 'middleware'=>'auth'], function () {
    Route::get('/', 'cpanel\CPanelController@index')->name('cpanel.home');
    
});

Auth::routes();