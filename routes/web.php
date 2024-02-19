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

     Route::get('testimonials','RentController@index');
        Route::get('about', 'RentController@about');   
        Route::get('cars', 'RentController@cars');
        Route::get('contact','RentController@contact');
        Route::get('blog','RentController@blog'); 
        Route::get('test', 'RentController@testimonial');
     

});