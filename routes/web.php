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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale'], function() {
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::view('/','home')->name('hello');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('home', 'HomeController@index')->name('home');
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    });

});


Route::get('set-locate/{lang}/{routeName}', 'LangController@index')->name('set-locate');


