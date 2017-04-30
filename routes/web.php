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

Route::get('/blade', function () {
    return view('website.mainBtg');
});

Route::get('admin',function(){
    return view('admin.places');
});

Route::get('admin/places', function () {
  return view('admin.places');
});
Route::get('admin/places/add', function () {
  return view('admin.addPlace');
});



Route::get('/adminView','TouristController@store');


Auth::routes();

//Route::get('/blade', 'TouristController@show');


