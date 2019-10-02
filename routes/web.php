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


// LANDING PAGE
Route::get('/', ['as'=>'landing_page.home', 'uses'=>'LandingPageController@index']);
Route::get('/about', ['as'=>'landing_page.about', 'uses'=>'LandingPageController@about']);
Route::get('/benefits', ['as'=>'landing_page.benefits', 'uses'=>'LandingPageController@benefits']);
Route::get('/services', ['as'=>'landing_page.services', 'uses'=>'LandingPageController@services']);
Route::get('/submit', ['as'=>'landing_page.submit', 'uses'=>'LandingPageController@submit']);
Route::get('/checkout', ['as'=>'landing_page.checkout', 'uses'=>'LandingPageController@checkout']);
Route::post('/sendemail', ['as'=>'landing_page.sendemail', 'uses'=>'SendMailController@sendmail']);

// ADMIN
Route::group(['prefix' => 'admin-page', 'middleware' => 'admin'], function() {
	Route::get('/', ['as'=>'admin.login', 'uses'=>'AdminController@dashboard']);
	Route::get('/dashboard', ['as'=>'admin.dashboard', 'uses'=>'AdminController@dashboard']);
	Route::get('/profile', ['as'=>'admin.profile', 'uses'=>'AdminController@profile']);
	Route::get('/inbox', ['as'=>'admin.inbox', 'uses'=>'AdminController@inbox']);
});

Route::get('admin-page/login', ['as'=>'admin.login', 'uses'=>'AdminController@loginPage']);
Route::post('admin-page/login', ['as'=>'admin.login.post', 'uses'=>'AdminController@login']);
Route::get('admin-page/logout', ['as'=>'admin.logout.post', 'uses'=>'AdminController@logout']);