<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function item(){
        return $this->belongsTo('App\Item');
    }

    public function payments(){

        return $this->hasOne('App\Payment');
    }
}
