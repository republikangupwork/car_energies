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

// Route::group(['prefix' => 'Sample_1'], function() {
Route::get('/', ['as'=>'landing_page.home', 'uses'=>'LandingPageController@index']);
Route::get('/About', ['as'=>'landing_page.about', 'uses'=>'LandingPageController@about']);
Route::get('/Benefits', ['as'=>'landing_page.benefits', 'uses'=>'LandingPageController@benefits']);
Route::get('/Services', ['as'=>'landing_page.services', 'uses'=>'LandingPageController@services']);
Route::get('/Submit', ['as'=>'landing_page.submit', 'uses'=>'LandingPageController@submit']);
// });


Route::group(['prefix' => 'Admin-Page'], function() {
	Route::get('/Dashboard', ['as'=>'admin.dashboard', 'uses'=>'AdminController@dashboard']);
	Route::get('/Profile', ['as'=>'admin.profile', 'uses'=>'AdminController@profile']);
});

// Route::get('/Sample_2', ['as'=>'sample_2', 'uses'=>'SampleTwoController@index']);
