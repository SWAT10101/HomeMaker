<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkersType extends Model
{
    public function workers()
    {
        return $this->hasMany('App\Workers');
    }

}
