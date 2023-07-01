<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActualUser;

class ActualUserController extends Controller
{
    public function index()
    {
    $users = ActualUser::all();
    return response()->json($users);
    }

    public function store(Request $request)
    {
        request()->validate([
    
            'name'=>'required',
    
            'email'=>'required',
    
            'phone'=>'required',

            'country'=>'required',

            'age'=>'required'
    
        ]);

        $users = new ActualUser();
        $users->name = request()->input('name');
        $users->email = request()->input('email');
        $users->phone = request()->input('phone');
        $users->country = request()->input('country');
        $users->age = request()->input('age');
        $users->save();
    }

    public function show($id)
    {
        $user = ActualUser::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
       $user = ActualUser::find($id);
       $user->update($request->all());
       return response()->json('User updated!');
    }
    public function destroy($id)
    {
        $user = ActualUser::find($id);
        $user->delete();
        return response()->json('User deleted!');
    }

}
