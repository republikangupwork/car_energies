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
Route::get('/About', ['as'=>'landing_page.about', 'uses'=>'LandingPageController@about']);
Route::get('/Benefits', ['as'=>'landing_page.benefits', 'uses'=>'LandingPageController@benefits']);
Route::get('/Services', ['as'=>'landing_page.services', 'uses'=>'LandingPageController@services']);
Route::get('/Submit', ['as'=>'landing_page.submit', 'uses'=>'LandingPageController@submit']);
Route::get('/Checkout', ['as'=>'landing_page.checkout', 'uses'=>'LandingPageController@checkout']);
Route::post('/sendemail', ['as'=>'landing_page.sendemail', 'uses'=>'SendMailController@sendmail']);

// ADMIN
Route::group(['prefix' => 'Admin-Page', 'middleware' => 'admin'], function() {
	Route::get('/', ['as'=>'admin.login', 'uses'=>'AdminController@dashboard']);
	Route::get('/Dashboard', ['as'=>'admin.dashboard', 'uses'=>'AdminController@dashboard']);
	Route::get('/Profile', ['as'=>'admin.profile', 'uses'=>'AdminController@profile']);
	// Route::get('/Notification', ['as'=>'admin.notification', 'uses'=>'AdminController@notification']);
});

Route::get('Admin-Page/Login', ['as'=>'admin.login', 'uses'=>'AdminController@loginPage']);
Route::post('Admin-Page/Login', ['as'=>'admin.login.post', 'uses'=>'AdminController@login']);
Route::get('Admin-Page/Logout', ['as'=>'admin.logout.post', 'uses'=>'AdminController@logout']);