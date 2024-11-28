<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Travel;
use Illuminate\Http\Request;

class TarvelController extends Controller
{


    public function show($flight_id,$user_id)
    {
        $travel=Travel::where('flight_id', $flight_id)
        ->where('user_id', $user_id)->get();

       
        
    }
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
    }

}
