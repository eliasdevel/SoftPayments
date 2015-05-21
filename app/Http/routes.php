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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'WelcomeController@index');
    Route::get('home', 'HomeController@index');

    //    Clientes
    Route::get('clients', 'ClientsController@index');
    Route::get('clients/create', 'ClientsController@create');
//    Route::post('clients/store', 'ClientsController@store');

    Route::post('clients/store', [
        'as'   => 'clients.store', 'uses' => 'ClientsController@store'
    ]);


    Route::get('clients/edit/{id}', 'ClientsController@edit')->where('id', '[0-9]+');

    Route::get('clients/destroy/{id}', 'ClientsController@destroy')->where('id', '[0-9]+');
});

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
