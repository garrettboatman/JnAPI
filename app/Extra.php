<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    public $timestamps = false;
    protected $fillable =
        [
            'episode_id',
            'name',
            'link'
        ];
}