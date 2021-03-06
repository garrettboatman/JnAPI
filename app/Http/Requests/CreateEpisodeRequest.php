<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEpisodeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Creating Episodes is forbidden for now.
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:5',
            'link' => 'url|active_url',
            'script' => 'required',
            'duration',
            'air_date',
            'scribe' => 'string',
            'embed_src'  => 'required|url|active_url'
        ];
    }

    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
        return response()->json(['errors' => $errors], 422);
    }
}
