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

Route::get('/', function () {
    return view('front.index');
});

Route::group(['prefix' => 'administrator'], function(){
    Route::get('/login', 'AdminController@index')->name('admin_home');
    Route::get('/', 'AdminController@dashboard')->name('admin_dashboard');
    Route::get('/admin', 'AdminController@admin')->name('admin_admin');
    Route::get('/user', 'AdminController@admin')->name('admin_user');
    Route::get('/user/create', 'AdminController@createUser')->name('admin_user_create');
    Route::post('/user/create', 'AdminController@createUserPost')->name('admin_user_create_post');
});
