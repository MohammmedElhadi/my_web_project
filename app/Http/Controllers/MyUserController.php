<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;
class MyUserController extends Controller
{
    function index (){
        return view('user.index');//->with('users',User::all());
    }
    public function getEvents(){

        return Datatables::of(User::query())->make(true);
    }

    function revoke(){
        
        $user = User::find($_GET['id']);
        dd($user);
        $user->syncRoles(['guset']);
        return  response()->json('success', 200);
    }
    function make(){
        
        $user = User::find($_GET['id']);
        $user->syncRoles(['admin']);
        return  response()->json('success', 200);
    }
}
