<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    public function student(){
        $this->belongsTo('App\Student');
    }
}
