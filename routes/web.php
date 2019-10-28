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

//ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:Admin']], function()
{
	Route::get('/', 'AdminController@index')->name('Admin.dashboard');
	Route::delete('/calonPelatih/deleteCalonPelatih/{id}', 'AdminController@deleteCalonPelatih')->name('Admin.deleteCalonPelatih');
	Route::get('/calonPelatih/terimaCalonPelatih/{id}','AdminController@terimaCalonPelatih')->name('Admin.terimaCalonPelatih');
});

//PELATIH
Route::group(['prefix' => 'pelatih', 'middleware' => ['auth', 'role:Pelatih']], function()
{
    Route::get('/', 'PelatihController@index')->name('pelatih.dashboard');
});

//PENCARI
Route::group(['prefix' => 'pencari', 'middleware' => ['auth', 'role:Pencari']], function()
{
    Route::get('/', 'PencariController@index')->name('pencari.dashboard');
});

//GUEST
Route::post('/addPelatih', 'AdminController@addPelatih')->name('Admin.addPelatih');
// Route::get('/addPelatih', 'AdminController@addPelatih')->name('Admin.addPelatih');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list_pelatih', 'PencariController@list_pelatih')->name('list_pelatih');