<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class MyUserController extends Controller
{
    function index (){
        return view('user.index')->with('users',User::all());
    }
    function revoke($data){
        
        $user = User::find($data->id);
        $user->removRole('admin');
        return  response()->json('success', 200);
    }
}
