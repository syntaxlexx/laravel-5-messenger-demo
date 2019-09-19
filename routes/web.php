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

Route::group(['prefix' => 'messages', 'as' => 'messages.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'MessagesController@index']);
    Route::get('/unread', ['as' => 'unread', 'uses' => 'MessagesController@unread']); // ajax + Pusher
    Route::get('/create', ['as' => 'create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'update', 'uses' => 'MessagesController@update']);
    Route::get('{id}/read', ['as' => 'read', 'uses' => 'MessagesController@read']); // ajax + Pusher
});

Route::group(['prefix' => 'thread', 'as' => 'thread.'], function() {
    Route::get('/{id}/add-participant/{userId}', ['as' => 'add-participant', 'uses' => 'ThreadController@addParticipant']);
    Route::get('/{id}/remove-participant/{userId}', ['as' => 'remove-participant', 'uses' => 'ThreadController@removeParticipant']);
    Route::get('/{id}/star', ['as' => 'star', 'uses' => 'ThreadController@star']);
    Route::get('/{id}/unstar', ['as' => 'unstar', 'uses' => 'ThreadController@unstar']);

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function() {
    return view('welcome');
})->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

/**
 * users mgmt
 */
Route::resource('users', 'UserController');
