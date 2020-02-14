<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //

    public function lecture()
    {
        return $this->belongsToMany('App\Lecture');
    }
}
