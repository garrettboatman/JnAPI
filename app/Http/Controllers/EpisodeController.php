<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episode;
use App\Http\Requests;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;

class EpisodeController extends ApiGuardController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $episodes = Episode::all();
        return response()->json(
            ['data' => $episodes],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $episode = Episode::where('id', $id)->get();
        if($episode->isEmpty()){
            return response()->json(
                ['status' => 404, 'detail' => 'Episode not found.'],
                404
            );
        } else{
            return response()->json(
                ['data' => $episode]
            );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Search episodes.
     *
     * @return Response
     */
    public function search_episodes($terms)
    {
        $episodes = Episode::search($terms)->get();

        if($episodes->isEmpty()){
            return response()->json(
                [],
                204
            );
        } else{
            return response()->json(
                ['data' => $episodes]
            );
        }
    }
}
