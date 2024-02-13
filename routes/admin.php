<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
       Route::get('createcar', 'CarController@create')->name('create_car');
        Route::get('cars','CarController@index')->name('cars');
        Route::get('editcar/{id}', 'CarController@edit')->name('edit_car');
        Route::get('deletecar/{id}','CarController@destroy')->name('delete_car');
        Route::put('updatecar/{id}','CarController@update')->name('update_car');
        Route::post('storecar', 'CarController@store')->name('store_car');