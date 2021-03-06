<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
 public function mechanicTrucks(){
     return $this->hasMany('App\Truck');
 }



public static function getSelectBox()
{
    return Mechanic::orderBy('name')->get()->pluck('name', 'id');
}
}