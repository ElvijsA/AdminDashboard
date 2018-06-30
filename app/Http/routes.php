<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Check if user logged in
Route::group(['middleware' => ['auth']], function () {
    //Set prefix for all routes admin
    Route::group(array('prefix' => 'admin'), function(){

        //Dashboard routes
        Route::get('/', 'Admin\AdminController@index');

        //Users
        Route::resource('/users', 'Admin\UserController');
        Route::post('/users/websites/store', 'Admin\UserController@addwebsite');
        Route::post('/users/websites/update/{id}', 'Admin\UserController@addwebsite');
        Route::post('/users/websites/delete/{user_id}/{website_id}', 'Admin\UserController@deletewebsite');
        Route::post('/users/websites/update/{user_id}/', 'Admin\UserController@addwebsite');
        Route::get('/users/websites/swichwebsite/{id}/', 'Admin\UserController@swichwebsite');

        //Websites
        Route::resource('/websites', 'Admin\WebsiteController');

        //Articles
        Route::resource('/articles', 'Admin\ArticleController'); 

    });
});