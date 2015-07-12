<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $timestamps = false;

    protected $fillable =
        [
            'title',
            'link',
            'script',
            'duration',
            'air_date',
            'scribe',
            'embed_src'
        ];
}