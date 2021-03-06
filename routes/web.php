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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>['auth']],function(){
    Route::resource('akun','AkunController');
    Route::resource('profil','ProfilController');
    Route::resource('tag','TagController');
    Route::resource('postingan','PostinganController');
    Route::resource('group','GroupController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
