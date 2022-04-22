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
Route::get('/positioning', 'FrontController@positioning')->name('positioning');


// Our Brand
Route::get('/our-brand', 'FrontController@ourBrand')->name('our-brand');
Route::group(['prefix' => 'our-brand'], function() {
    Route::get('/logo', 'FrontController@ourBrandLogo')->name('our-brand-logo');
    Route::get('/color', 'FrontController@ourBrandColor')->name('our-brand-color');
    Route::get('/image', 'FrontController@ourBrandImage')->name('our-brand-image');
    Route::get('/uses', 'FrontController@ourBrandUses')->name('our-brand-uses');
    Route::get('/type', 'FrontController@ourBrandType')->name('our-brand-type');
});

// Easy.cl
Route::get('/easycl', 'FrontController@easycl')->name('easycl');
Route::group(['prefix' => 'easycl'], function() {
    Route::get('/logo', 'FrontController@easyclLogo')->name('easycl-logo');
    Route::get('/color', 'FrontController@easyclColor')->name('easycl-color');
    Route::get('/uses', 'FrontController@easyclUses')->name('easycl-uses');
});

// Expert
Route::get('/expert', 'FrontController@expert')->name('expert');
Route::group(['prefix' => 'expert'], function() {
    Route::get('/logo', 'FrontController@expertLogo')->name('expert-logo');
    Route::get('/color', 'FrontController@expertColor')->name('expert-color');
    Route::get('/image', 'FrontController@expertImage')->name('expert-image');
    Route::get('/uses', 'FrontController@expertUses')->name('expert-uses');
    Route::get('/type', 'FrontController@expertType')->name('expert-type');
});



Route::get('/institutional-marketing', 'FrontController@institutional_marketing')->name('institutional-marketing');
Route::get('/endomarketing', 'FrontController@endoMarketing')->name('endomarketing');
Route::get('/graphic-resources', 'FrontController@graphicResources')->name('graphic-resources');
Route::get('/login', 'FrontController@login')->name('login');


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
