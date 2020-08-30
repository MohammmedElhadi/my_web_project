<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class MyUserController extends Controller
{
    function index (){
        return view('user.index')->with('users',User::all());
    }
    function revoke(){
        
        $user = User::find($_GET['id']);
        $user->syncRoles(['guest'])
        ;
        return  response()->json('success', 200);
    }
    function make(){
        
        $user = User::find($_GET['id']);
        $user->syncRoles(['admin'])
        ;
        return  response()->json('success', 200);
    }
}
