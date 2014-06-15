<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/laravel-test/api/person', 'PersonController',
    array('only' => array('index', 'show', 'create', 'destroy')));

Route::resource('/laravel-test/api/connection', 'ConnectionController',
    array('only' => array('index', 'show')));

Route::get('/laravel-test', 'HomeController@showWelcome');

Route::get('/laravel-test/index', 'IndexController@index');

Route::get('/laravel-test/person_list', 'PersonListController@index');


