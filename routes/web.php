<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();
Route::get('/admin', 'PersonalInfoController@dashboard');
Route::get('/admin/personal_info', 'PersonalInfoController@index');
Route::post('/admin/personal_info/create','PersonalInfoController@create');
Route::get('/admin/personal_info/add','PersonalInfoController@add');
Route::post('/admin/personal_info/update/{id}','PersonalInfoController@update');
Route::get('/admin/personal_info/edit/{id}','PersonalInfoController@edit');
Route::get('/admin/personal_info/delete/{id}','PersonalInfoController@delete');

Route::get('/admin/about', 'AboutController@index');
Route::post('/admin/about/create','AboutController@create');
Route::post('/admin/about/createAward','AboutController@createAward');
Route::get('/admin/about/add','AboutController@add');
Route::post('/admin/about/update/{id}','AboutController@update');
Route::get('/admin/about/edit/{id}','AboutController@edit');
Route::get('/admin/about/delete/{id}','AboutController@delete');
Route::get('/admin/about/statuschange/{id}','AboutController@statuschange');
Route::get('/admin/about/addAward/{id}','AboutController@addAward');
Route::post('/admin/about/updateAward/{id}','AboutController@updateAward');
Route::get('/admin/about/editAward/{id}','AboutController@editAward');
Route::get('/admin/about/deleteAward/{id}','AboutController@deleteAward');
Route::get('/admin/about/statuschangeAward/{id}','AboutController@statuschangeAward');


//Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

