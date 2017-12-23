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
Route::get('/', function() {   
    return view('nearby_shops'); // will return app/views/index.php 
});
Route::get('/nearbyShops/{action}/{id}','NearbyShopsController@update');
Route::get('/nearbyShops','NearbyShopsController@show');
Route::get('/myPreferedShops', function() {   
    return view('mypreafered_shops'); // will return app/views/index.php 
});
Route::get('/my_prefered_shops','MyPreaferdShopsController@show');
Route::get('/my_prefered_shops/{id}', 'MyPreaferdShopsController@update');

