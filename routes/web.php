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
    return redirect('/admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin/{user}/profile', 'AdminController@profile')->name('admin.profile');

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::resource('/admin/subscribers', 'AdminSubscribersController');
    Route::resource('/admin/users', 'AdminUsersController');

    Route::get('/admin/manage/subscribers', 'AdminSubscribersController@manage');

});
