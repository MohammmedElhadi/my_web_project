<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use Validator,Redirect,Response,File;
 use Laravel\Socialite\Facades\Socialite;
 use App\User;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
 {
 public function redirect($provider)
 {
     return Socialite::driver($provider)->redirect();
 }
 public function callback($provider)
 {
   $getInfo = Socialite::driver($provider)->stateless()->user(); 
   //dd($getInfo);
   $user = User::firstOrCreate(['email' => $getInfo->email ] , [
    'name'     => $getInfo->name,
    'email'    => $getInfo->email,
    'provider' => $provider,
    'provider_id' => $getInfo->id
   ]);
   //$user = $this->createUser($getInfo,$provider); 

   Auth::login($user);
   //dd(Auth::user());
   return redirect()->intended('welcome/');
 }
}