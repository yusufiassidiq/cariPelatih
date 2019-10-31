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
			return redirect('/home');
		 }
		// return redirect('/home');
		  
		if(Auth::user()->ClassUser->ClassUser == 'Pencari'){
		return redirect('/home');
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
Route::group(['prefix' => 'home', 'middleware' => ['auth', 'role:Pencari']], function()
{
	Route::get('/', 'PencariController@index')->name('pencari.dashboard');
});



Auth::routes();


//GUEST
Route::post('/addPelatih', 'PelatihController@addPelatih')->name('addPelatih');
Route::get('/registerPelatih', 'PelatihController@registerPelatih')->name('registerPelatih');

	// Route::get('/home', function () {
	// 	return view('welcome');
	// })->name('welcome');

Route::get('/home','PencariController@index')->name('home');
Route::get('/list_pelatih', 'PelatihController@list_pelatih')->name('list_pelatih');