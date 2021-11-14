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

Route::get('/', 'FrontController@home')->name('front_home');

Route::group(['prefix' => 'administrator'], function() {
    Route::get('/login', 'AdminController@login')->name('admin_login');
    Route::post('/login', 'AdminController@loginValidate')->name('admin_login_validate');

    Route::group(['middleware' => 'admin'], function() {
        Route::get('/', 'AdminController@dashboard')->name('admin_dashboard');
        Route::get('/logout', 'AdminController@logout')->name('admin_dashboard_logout');

        // Users
        Route::group(['prefix' => 'user'], function() {
            Route::get('/admin', 'UserController@users')->name('admin_admin');
            Route::get('/client', 'UserController@users')->name('admin_user');
            Route::get('/product-manager', 'UserController@users')->name('admin_product_manager');
            Route::get('/create', 'UserController@createUser')->name('admin_user_create');
            Route::post('/create', 'UserController@createUserPost')->name('admin_user_create_post');
            Route::get('/delete/{id}', 'UserController@deleteUser')->name('admin_user_delete');
            Route::get('/edit/{roleID}/{id}', 'UserController@editUser')->name('admin_user_edit');
            Route::put('/edit/{roleID}/{id}', 'UserController@editUserPut')->name('admin_user_edit_put');
        });

        // Campaigns
        Route::group(['prefix' => 'campaign'], function() {
            Route::get('/', 'CampaignController@campaign')->name('admin_campaign');
            Route::get('/create', 'CampaignController@createCampaign')->name('admin_campaign_create');
            Route::post('/create/upload', 'CampaignController@createUploadCampaign')->name('admin_campaign_create_uploads');
            Route::post('/create', 'CampaignController@createCampaignPost')->name('admin_campaign_create_post');
            Route::get('/delete/{id}', 'CampaignController@deleteCampaign')->name('admin_campaign_delete');
            Route::get('/edit/{id}', 'CampaignController@editCampaign')->name('admin_campaign_edit');
            Route::post('/edit/{id}/upload', 'CampaignController@editUploadCampaign')->name('admin_campaign_edit_uploads');
            Route::get('/{id}/files', 'CampaignController@getUploadsCampaignId')->name('admin_campaign_get_files');
          });

        // Media
        Route::group(['prefix' => 'media'], function() {
            Route::get('/', 'MediaController@media')->name('admin_media');
        });

        // Calendar
        Route::group(['prefix' => 'calendar'], function() {
            Route::get('/', 'CalendarController@calendar')->name('admin_calendar');
        });

        // upload
        Route::post('/upload', 'AdminController@upload')->name('api_upload');
        Route::delete('/upload', 'AdminController@uploadDelete')->name('api_upload_delete');
    });
});
