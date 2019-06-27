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

// route for Page which contains form contact
Route::get('/message', [
  'as' => 'message_path',
  'uses' => 'MessagesController@create',
]);

// route to manage Form Contact sending
Route::post('/message', [
  'as' => 'message_path',
  'uses' => 'MessagesController@store',
]);
