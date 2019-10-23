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
	if(!Auth::check()){
		return redirect('/login');
	 }
    if(Auth::user()->ClassUser->ClassUser == 'Pencari'){
		return redirect('/pencari');
	 }
	 if(Auth::user()->ClassUser->ClassUser == 'Pelatih'){
		 return redirect('/pelatih');
	 }
	 if(Auth::user()->ClassUser->ClassUser == 'Admin'){
		 return redirect('/admin');
	 }
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:Admin']], function()
{
    Route::get('/', 'AdminController@index')->name('Admin.dashboard');
});

Route::group(['prefix' => 'pelatih', 'middleware' => ['auth', 'role:Pelatih']], function()
{
    Route::get('/', 'PelatihController@index')->name('pelatih.dashboard');
});

Route::group(['prefix' => 'pencari', 'middleware' => ['auth', 'role:Pencari']], function()
{
    Route::get('/', 'PencariController@index')->name('pencari.dashboard');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
