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

// Route::get('/', function () {
//     return view('welcome');
// });

      Auth::routes(['verify'=>true]);     
      
        Route::middleware('verified')->group(function () {
        Route::get('/','HomeController@index')->name('home');
        Route::get('createcar', 'CarController@create')->name('create_car');
        Route::get('cars','CarController@index')->name('cars');
        Route::get('editcar/{id}', 'CarController@edit')->name('edit_car');
        Route::get('deletecar/{id}','CarController@destroy')->name('delete_car');
        Route::put('updatecar/{id}','CarController@update')->name('update_car');
        Route::post('storecar', 'CarController@store')->name('store_car');

        Route::get('categories','CategoryController@index')->name('categories');
        Route::get('createcat', 'CategoryController@create')->name('create_cat');   
        Route::get('editcat/{id}', 'CategoryController@edit')->name('edit_cat');
        Route::get('deletcat/{id}','CategoryController@destroy')->name('delete_cat');
        Route::put('updatecat/{id}','CategoryController@update')->name('update_cat');
        Route::post('storecat', 'CategoryController@store')->name('store_cat');

       Route::get('teams','TeamController@index')->name('teams');
        Route::get('createteam', 'TeamController@create')->name('create_team');   
        Route::get('editteam/{id}', 'TeamController@edit')->name('edit_team');
        Route::get('deletecat/{id}','TeamController@destroy')->name('delete_team');
        Route::put('updateteam/{id}','TeamController@update')->name('update_team');
        Route::get('showteam/{id}','TeamController@show')->name('show_team');
        Route::post('storeteam', 'TeamController@store')->name('store_team');

         Route::get('testimonials','TestimonialController@index')->name('testimonials');
        Route::get('createtest', 'TestimonialController@create')->name('create_test');   
        Route::get('edittest/{id}', 'TestimonialController@edit')->name('edit_test');
        Route::get('deletetest/{id}','TestimonialController@destroy')->name('delete_test');
        Route::put('updatest/{id}','TestimonialController@update')->name('update_test'); 
        Route::post('storetest', 'TestimonialController@store')->name('store_test');

        Route::post('contactUs','ContactController@store')->name('contact_store');
         Route::get('contacts', 'TestimonialController@index')->name('contacts');
        Route::push('messages','ContactController@markAsUnread')->name('messages');

});

