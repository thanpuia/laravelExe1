<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'name','price','quantity'];
    public function customers(){

        return $this->hasMany('App\Customer');
    }
}
