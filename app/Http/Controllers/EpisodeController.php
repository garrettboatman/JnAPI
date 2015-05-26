<?php namespace App\Http\Controllers;

use DB;
use App\Models\Episode;

class EpisodeController extends Controller {

    /**
     * Get all episodes.
     *
     * @return Response
     */
    public function get_all_episodes()
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
}