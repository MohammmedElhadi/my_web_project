<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $guarded = [];

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }
}
