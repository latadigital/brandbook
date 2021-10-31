<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('front.index');
});

Route::group(['prefix' => 'administrator'], function() {
    Route::get('/login', 'AdminController@login')->name('admin_home');
    Route::get('/', 'AdminController@dashboard')->name('admin_dashboard');

    // Users
    Route::group(['prefix' => 'user'], function() {
        Route::get('/client', 'AdminController@admin')->name('admin_user');
        Route::get('/admin', 'AdminController@admin')->name('admin_admin');
        Route::get('/create', 'AdminController@createUser')->name('admin_user_create');
        Route::post('/create', 'AdminController@createUserPost')->name('admin_user_create_post');
        Route::get('/delete/{id}', 'AdminController@deleteUser')->name('admin_user_delete');
        Route::get('/edit/{roleID}/{id}', 'AdminController@editUser')->name('admin_user_edit');
        Route::put('/edit/{roleID}/{id}', 'AdminController@editUserPut')->name('admin_user_edit_put');
    });
});
