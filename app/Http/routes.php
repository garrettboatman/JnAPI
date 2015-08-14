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

Route::group(['prefix' => 'api/v1'], function(){

    Route::resource('episodes', 'EpisodeController', ['except' => ['create', 'edit']]);
    Route::resource('extras', 'ExtraController', ['except' => ['create', 'edit']]);

    Route::get('episodes/{id}/extras','ExtraController@get_episode_extra');
    Route::get('episodes/search/{terms}','EpisodeController@search_episodes');

});