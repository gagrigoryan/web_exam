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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'UserController@myTasks')->name('tasks');
Route::get('/profile','UserController@profile')->name('profile');
Route::get('/get-some-friends', 'UserController@getMyFriends')->name('get.some.friends');
Route::get('/get-done-tasks', 'UserController@getDoneTasks')->name('get.done.tasks');
