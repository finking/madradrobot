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

Route::get('/', array('as' => 'index', 'uses' => 'App\Controllers\Site\MainController@index'));

Route::get('former', array('as' => 'former', 'uses' => 'App\Controllers\Site\MainController@former'));

Route::post('action', array('as' => 'action', 'uses' => 'App\Controllers\Site\MainController@action'));

Route::get('view', array('as' => 'view', 'uses' => 'App\Controllers\Site\MainController@view'));
