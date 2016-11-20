<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home');


Route::get('catalog', 'CatalogController@index');
Route::get('catalog/filter/{query}', 'CatalogController@filter');

Route::get('journey', 'JourneyController@index');

Route::resource('products', 'ProductController');
Route::resource('shops', 'ShopController');
Route::resource('events', 'EventController');
Route::resource('places', 'PlaceController');
Route::resource('orders', 'OrderController');


Route::group(['prefix' => 'admin'], function(){

    Route::get('dashboard', function (){
        return ['oui', 'non'];
    });

});
