<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    public function workerstyp()
    {
        return $this->belongsTo('App\WorkersType');
    }
}
