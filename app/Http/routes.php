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

$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
    // Episode Routes
    $app->get('episodes','EpisodeController@index');
    $app->get('episodes/{id}','EpisodeController@get_single_episode');
    $app->get('episodes/{id}/extras','ExtraController@get_episode_extra');
    $app->get('episodes/search/{terms}','EpisodeController@search_episodes');
    // Extra Routes
    $app->get('extras','ExtraController@index');
    $app->get('extras/{id}','ExtraController@get_single_extra');
});