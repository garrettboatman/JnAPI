<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Nicolaslopezj\Searchable\SearchableTrait;

class Episode extends Model
{
    use SearchableTrait;

    public $timestamps = false;

    protected $searchable = [
        'columns' => [
            'title' => 10,
            'script' => 7
        ]
    ];

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