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
    return view('home.index', [
        'events' => DB::table('events')->get()
    ]);
})->name('home');

/*Panier*/
Route::post('cart', 'CartController@addItem');
Route::get('cart', 'CartController@getItem');

Route::get('my-cart', 'CartController@index');

Route::get('clearSession', function (){

    session(['item' => []]);
    return redirect()->back();

});


/*Catalogue*/
Route::get('catalog', 'CatalogController@index');
Route::get('load-products', 'CatalogController@getProducts');
Route::get('catalog/filter/{query}', 'CatalogController@filter');

/*Trajet*/
Route::get('journey', 'JourneyController@index');
Route::get('bill', 'OrderController@bill');

Route::resource('products', 'ProductController');
Route::resource('shops', 'ShopController');
Route::resource('events', 'EventController');
Route::resource('places', 'PlaceController');
Route::resource('orders', 'OrderController');
Route::resource('restaurants', 'RestaurantController');

Route::get('language/{lang}', function($lang){
    App::setLocale($lang);
    return redirect()->back();
});

Route::get('pdf', 'PdfController@generate');


/*Admin*/

Route::group(['prefix' => 'admin'], function(){

    Route::get('analytics', 'DashboardController@analytics');
    Route::get('event', 'DashboardController@event');
    Route::get('shop', 'DashboardController@shop');
    Route::get('place', 'PlaceController@indexAdmin');

    Route::get('restaurant', 'RestaurantController@indexAdmin');

    Route::get('get-shops/{query}', 'DashboardController@getShops');

});

