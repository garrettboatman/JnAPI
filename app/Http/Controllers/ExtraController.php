<?php

namespace App\Http\Controllers;

use App\Extra;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;

class ExtraController extends ApiGuardController {

    /**
     * Get all extras.
     *
     * @return Response
     */
    public function index()
    {
        return response()->json(
            Extra::all()
        );
    }

    /**
     * Get single extras.
     *
     * @return Response
     */
    public function get_single_extra($id)
    {
        return response()->json(
            Extra::where('id', $id)
                ->get()
        );
    }

    /**
     * Get episode extras.
     *
     * @return Response
     */
    public function get_episode_extra($id)
    {
        return response()->json(
            Extra::where('episode_id', $id)
                ->get()
        );
    }
}