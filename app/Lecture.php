<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    //

    public function room()
    {
        return $this->hasOne('App\Room');
    }
}
