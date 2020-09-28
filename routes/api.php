<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',
    'namespace' => 'Back\Auth',
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

    Route::middleware('can:be-user')->group(function () {
        Route::post('me', 'AuthController@me');
    });

});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'admin',
    'namespace' => 'Back\Api',
], function () {

    Route::group([
        'middleware' => 'can:be-admin',
    ], function () {

        //Settings
        Route::name('setting.')->prefix('setting')->group(
            function () {
                Route::get('/', 'SettingController@index')->name('index');
                Route::post('/update', 'SettingController@update')->name('update');

            });

            //Faqs
        Route::name('faqs.')->prefix('faqs')->group(
            function () {
                Route::post('/store', 'FaqController@store')->name('store');
                Route::get('/', 'FaqController@index')->name('index');
                Route::get('/create', 'FaqController@create')->name('create');
                Route::get('/edit/{id}', 'FaqController@edit')->name('edit');
                Route::post('/update/{id}', 'FaqController@update')->name('update');
                Route::get('/destroy/{id}', 'FaqController@destroy')->name('destroy');

            }); 

            

    });

});
