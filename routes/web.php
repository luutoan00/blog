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
Route::group(['prefix' => 'test'], function() {
	Route::get('list-users','UserController@getLitsUser');
	Route::resource('users','UserController');
});


Route::group(['prefix' => 'blog'], function() {
	Route::get('/', 'BlogController@index');

	Route::get('contact', 'BlogController@contact');

	Route::get('category/{slug}', 'BlogController@contact');

	Route::get('about-us', 'BlogController@aboutus');

	Route::get('page-right-sidebar', 'BlogController@pagerightsidebar');

	Route::get('post-right-sidebar', 'BlogController@postrightsidebar');

    Route::get('{slug}','BlogController@show');// hiển thị thông tin
});

Route::group(['prefix' => 'admin'], function() {


	
	// Route::resource('users','UserControllerList');
	
	Route::get('index', 'AdminController@index')->name('admin.index');
	Route::get('list-users','AdminController@ListUser')->name('datatables.data'); // tra ve json
	Route::get('show', 'AdminController@show')->name('admin.show');
	Route::get('json/show', 'AdminController@jsonshow')->name('admin.json.show');

	Route::get('create','AdminController@create')->name('admin.create');
	Route::post('store','AdminController@store')->name('admin.store');

	Route::get('show/{id}','AdminController@detail')->name('admin.detail');

	Route::put('update/{id}','AdminController@update')->name('admin.update');
	Route::get('show/{id}/edit', 'AdminController@edit')->name('admin.edit');

	Route::delete('destroy/{id}','AdminController@destroy');

	
	//put or patch
	Route::delete('destroy/{id}','AdminController@destroy')->name('admin.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
