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

// START - LANDING PAGE
Route::get('/', ['as'=>'landing_page.home', 'uses'=>'LandingPageController@index']);
Route::get('/about', ['as'=>'landing_page.about', 'uses'=>'LandingPageController@about']);
Route::get('/benefits', ['as'=>'landing_page.benefits', 'uses'=>'LandingPageController@benefits']);
Route::get('/services', ['as'=>'landing_page.services', 'uses'=>'LandingPageController@services']);
Route::get('/submit', ['as'=>'landing_page.submit', 'uses'=>'LandingPageController@submit']);
Route::get('/checkout', ['as'=>'landing_page.checkout', 'uses'=>'PaymentController@checkout']);
Route::post('/checkout', ['as'=>'landing_page.payment_store', 'uses'=>'PaymentController@payment_store']);
Route::post('/sendemail', ['as'=>'landing_page.sendemail', 'uses'=>'SendMailController@sendmail']);
// END - LANDING PAGE

// START - ADMIN
Route::group(['prefix' => 'admin-page', 'middleware' => 'admin'], function() {
	Route::get('/', function() {
		return redirect('admin-page/dashboard');
	});
	Route::get('/dashboard', ['as'=>'admin.dashboard', 'uses'=>'AdminController@dashboard']);
	Route::get('/profile', ['as'=>'admin.profile', 'uses'=>'AdminController@profile']);
	Route::get('/mailbox', ['as'=>'admin.mailbox', 'uses'=>'AdminController@mailbox']);
	Route::group(['prefix' => '/mailbox'], function() {
		Route::get('/', function() {
			return redirect('admin-page/mailbox/inbox');
		});
		Route::get('/inbox', ['as'=>'admin.mailbox.inbox', 'uses'=>'AdminController@inbox']);
		Route::get('/sent', ['as'=>'admin.mailbox.sent', 'uses'=>'AdminController@sent']);
		Route::get('/trash', ['as'=>'admin.mailbox.trash', 'uses'=>'AdminController@trash']);
		Route::post('/move_to_trash', ['as'=>'admin.mailbox.move_to_trash', 'uses'=>'AdminController@moveToTrash']);
	});
});

Route::get('admin-page/login', ['as'=>'admin.login', 'uses'=>'AdminController@loginPage']);
Route::post('admin-page/login', ['as'=>'admin.login.post', 'uses'=>'AdminController@login']);
Route::get('admin-page/logout', ['as'=>'admin.logout.post', 'uses'=>'AdminController@logout']);
// END - ADMIN 