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

Route::group(['prefix' => 'Sample_1'], function() {
	Route::get('/', ['as'=>'sample_1.home', 'uses'=>'SampleOneController@index']);
	Route::get('/About', ['as'=>'sample_1.about', 'uses'=>'SampleOneController@about']);
	Route::get('/Benefits', ['as'=>'sample_1.benefits', 'uses'=>'SampleOneController@benefits']);
	Route::get('/Services', ['as'=>'sample_1.services', 'uses'=>'SampleOneController@services']);
	Route::get('/Submit', ['as'=>'sample_1.submit', 'uses'=>'SampleOneController@submit']);
});

Route::group(['prefix' => 'Admin-Page'], function() {
	Route::get('/Dashboard', ['as'=>'admin.dashboard', 'uses'=>'AdminController@dashboard']);
	Route::get('/Profile', ['as'=>'admin.profile', 'uses'=>'AdminController@profile']);
});

// Route::get('/Sample_2', ['as'=>'sample_2', 'uses'=>'SampleTwoController@index']);
