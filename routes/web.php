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

Route::group(['middleware' => ['web']], function () {

	Route::get('/', 'PageController@home')->name('homePages');
	Route::get('/about', 'PageController@about')->name('aboutPage');
	Route::get('/products', 'PageController@products')->name('productsPage');
	Route::get('/contact-us', 'PageController@contact')->name('contactPage');
	Route::get('/our-mixes', 'PageController@mixes')->name('ourMixesPage');
	Route::get('/blog', 'PageController@blog')->name('blogPage');
	Route::get('/gift-box', 'PageController@giftBox')->name('giftBox');

	//ajax
	Route::post('/blog/get/posts', 'BlogController@getBlogPosts');

	//single
	Route::get('/post/{slug}', 'PostController@show');
});

Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
