<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function scores()
    {
        return $this->hasMany('App\Score');
    }

    public function guardians()
    {
        return $this->hasMany('App\Guardian');
    }
}
