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
    return view('auth/login'); // will return app/views/nearby_shops.blade.php 
});

Auth::routes();


  // All my routes that needs a logged in user are inside this group
Route::group(['middleware' => 'auth'], function () {

   Route::get('/nearbyShops', function() {   
    return view('nearby_shops'); // will return app/views/nearby_shops.blade.php 
			});
	Route::get('/nearbyShops/{action}/{id}','NearbyShopsController@update');
	Route::get('/nearbyShops/{coordinates}','NearbyShopsController@show');
	Route::get('/myPreferedShops', function() {   
    return view('mypreafered_shops'); // will return app/views/mypreafered_shops.blade.php 
	});
	Route::get('/my_prefered_shops/{coordinates}','MyPreaferdShopsController@show');
	Route::get('/my_prefered_shops/update/{id}', 'MyPreaferdShopsController@update');   

});