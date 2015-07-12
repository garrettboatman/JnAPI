<?php namespace App\Models;

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