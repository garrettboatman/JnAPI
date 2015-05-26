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

$app->get(
    'episodes/all',
    [
        'uses' => 'App\Http\Controllers\EpisodeController@get_all_episodes'
    ]
);

$app->get(
    'episode/{id}',
    [
        'uses' => 'App\Http\Controllers\EpisodeController@get_single_episode'
    ]
);