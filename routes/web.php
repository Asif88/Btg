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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/blade', function () {
    return view('mainBtg');
});

Route::get("/admin",'AdminOperationController@index');

Route::get('admin/places', function () {
  return view('admin.places');
});
Route::get('admin/places/add', function () {
  return view('admin.addPlace');
});

Route::get('admin/register', function () {
  return view('admin.adminRegister');
});
Route::get('admin/login', function () {
  return view('admin.adminLogin');
});
Route::get('admin/login/reset', function () {
  return view('admin.email');
});
//Route::get('admin/editPlace', function () {
  //return view('admin.editPlace');
//S});
//Route::post('admin/register', function () {
    // Update the user's profile...

  //  return redirect('admin.adminRegister')->with('status', 'Profile updated!');
//});



//Route::get('/adminView','TouristController@store');
Route::get("/adminRegister",'AdminAccountController@index');
Route::post("admin/store",'AdminAccountController@storeCategory');
Route::post("admin/login",'AdminAccountController@login');

Route::post("storeCategory",'AdminOperationController@storeCategory');
Route::get("admin/editCategory/{id}",["as"=>"edit_category","uses"=>'AdminOperationController@editCategory']);
Route::post("admin/updateCategory/{id}",["as"=>"update_category","uses"=>'AdminOperationController@updateCategory']);
Route::get("admin/destroyCategory/{id}",["as"=>"delete_category","uses"=>'AdminOperationController@destroyCategory']);


Route::get("admin/addPlace/{id}",["as"=>"add_place","uses"=>'AdminOperationController@addPlace']);
Route::post("admin/storePlace/{id}",["as"=>"store_place","uses"=>'AdminOperationController@storePlace']);
Route::get("admin/editPlace/{id}",["as"=>"edit_place","uses"=>'AdminOperationController@editPlace']);
Route::post("admin/updatePlace/{id}",["as"=>"update_place","uses"=>'AdminOperationController@updatePlace']);
Route::get("admin/destroyPlace/{id}",["as"=>"delete_place","uses"=>'AdminOperationController@destroyPlace']);


Auth::routes();
Route::get('/home', 'HomeController@index');

//Route::get('/blade', 'TouristController@show');


