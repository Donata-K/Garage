<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
        public function truckMechanic(){
            return $this->belongsTo('App\Mechanic', 'mechanic_id', 'id');
        }


     
        
public static function getSelectBox()
{
    return Mechanic::orderBy('name')->get()->pluck('name', 'id');
}
}


