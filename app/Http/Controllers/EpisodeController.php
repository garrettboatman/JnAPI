<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Http\Controllers\Controller;

class EpisodeController extends Controller {

    /**
     * Get all episodes.
     *
     * @return Response
     */
    public function index()
    {
        return response()->json(
            Episode::all()
        );
    }

    /**
     * Get single episodes.
     *
     * @return Response
     */
    public function get_single_episode($id)
    {
        return response()->json(
            Episode::where('id', $id)
                ->get()
        );
    }

    /**
     * Search episodes.
     *
     * @return Response
     */
    public function search_episodes($terms)
    {
        return response()->json(
            Episode::search($terms)->get()
        );
    }
}