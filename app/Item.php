<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function Iroul()
    {
        return $this->belongsTo('App\Iroul');
    }
}
