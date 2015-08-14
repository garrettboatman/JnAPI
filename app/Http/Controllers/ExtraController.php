<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Extra;
use App\Http\Requests;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;

class ExtraController extends ApiGuardController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->json(
            ['data' => Extra::all()]
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
        $extra = Extra::where('id', $id)->get();
        if($extra->isEmpty()){
            return response()->json(
                ['status' => 404, 'detail' => 'Extra not found.'],
                404
            );
        } else{
            return response()->json(
                ['data' => $extra]
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
     * Get episode extras.
     *
     * @return Response
     */
    public function get_episode_extra($id)
    {
        $extras = Extra::where('episode_id', $id)->get();
        if($extras->isEmpty()){
            return response()->json(
                [],
                204
            );
        } else{
            return response()->json(
                ['data' => $extras]
            );
        }
    }
}
