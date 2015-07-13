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
    Route::get('episodes','EpisodeController@index');
    Route::get('episodes/{id}','EpisodeController@get_single_episode');
    Route::get('episodes/{id}/extras','ExtraController@get_episode_extra');
    Route::get('episodes/search/{terms}','EpisodeController@search_episodes');
    // Extra Routes
    Route::get('extras','ExtraController@index');
    Route::get('extras/{id}','ExtraController@get_single_extra');
});