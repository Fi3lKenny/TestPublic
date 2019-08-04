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

Route::view('/', 'form');
Route::get('/list-data', 'ListController@index');
Route::get('/detail-data/{id}', 'ListController@showDetail');

Route::post('/submit_form', 'FormController@formSubmit');
Route::post('/submit_comment', 'FormController@commentSubmit');
Route::post('/submit_vote', 'FormController@voteSubmit');
