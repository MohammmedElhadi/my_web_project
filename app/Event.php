<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $guarded = [];
    public function domaines()
    {
        return $this->belongsToMany('App\Domaine');
    }
    public function gerants()
    {
        return $this->belongsToMany('App\Gerant');
    }

    public function organisateurs()
    {
        return $this->belongsToMany('App\Organisateur');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
