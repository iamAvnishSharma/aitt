<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //protected $fillable = ['user_id','question','a1','a2','a3','a1hl','a2hl','a3hl','qorder'];
    public $fillable = ['teacher','subject','division'];
}
