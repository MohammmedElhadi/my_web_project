<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisateur extends Model
{
    protected $guarded = [];
    public function events()
    {
        return $this->belongsToMany('App\Events');
    }
}
