<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable=[
        'id',
        'evaloution',
        'flight_id',
        'user_id',
        
    ];

    //protected function setKeysForSaveQuery($query)
   /* {
        $query 
        ->where('flight_id','=',$this->getAttribute('flight_id'))
        ->where('user_id','=',$this->getAttribute('id'))
    }*/
}
