<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
   protected $fillable=[
   'id',
    'flight_id',
    'user_id',
    'date',
    'limit',
    'airline_id'
   ];
}
