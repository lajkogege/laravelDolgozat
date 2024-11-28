<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index()
    {
        return User::all();
    }

   //show
    public function show(string $id)
    {
        return User::find($id);
    }

    //update
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
    }

   //delete
    public function destroy(string $id)
    {
        User::find($id)->delete();
    }
}
