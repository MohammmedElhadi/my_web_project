<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
//    $user = auth()->user();
//     dd($user->unreadNotifications->first()->data['event']);
//    // dd();
    return view('welcome')->with('evenments','App\Event'::all())->with('users', 'App\User'::all())->with('domaines', 'App\Domaine'::all());})->name('welcome');
Route::get('/about', function () {return view('frontend.about');})->name('about');
Route::resource('evenement' , 'EventController');
Route::get('/events', function () { return view('frontend.events')->with('evenments','App\Event'::all())->with('categories', 'App\Category'::all())->with('domaines', 'App\Domaine'::all());})->name('events');
Route::get('/myevents', function () { return view('frontend.userevents')->with('categories', 'App\Category'::all())->with('domaines', 'App\Domaine'::all());})->name('myevents');
Route::get('/myevents/notifications/', function () {
    foreach (Auth::user()->unreadNotifications as $notification) {
        $notification->markAsRead();
    }
    return view('frontend.userevents')->with('categories', 'App\Category'::all())->with('domaines', 'App\Domaine'::all());})->name('myevents.notifications');

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('user' , 'MyUserController');
Route::resource('domaine' , 'DomaineController');
Route::resource('category' , 'CategoryController');



Route::get('/admin/revoke/' , 'MyUserController@revoke');
Route::get('/admin/make/' , 'MyUserController@make');

Route::get('/event_data/', 'EventController@getEvents')->name('datatables.data');

Route::get('ajax/notify/{id}', 'EventController@sendNotification');

Route::get('abonner/{id}' , function(){
   $event =  Event::find($_GET['id']);
   if($event->nombre_participant < $event->nombre_max_participant){
        $event->users()->attach(Auth::id());
        $event->nombre_participant  =  $event->nombre_participant+1;
        $event->save();
        
        return response("success");
   }
   else{
       return response('error');
   }
});
Route::get('desabonner/{id}' , function(){
    $event =  Event::find($_GET['id']);
    $event->nombre_participant =  $event->nombre_participant-1;
    $event->save();
    $event->users()->detach(Auth::id());
    return response("success",200);
    
});
Route::get('/dashboard', function () { return view('home')->with('users','App\User'::all())->with('evenments','App\Event'::all())
    ->with('categories', 'App\Category'::all())->with('domaines', 'App\Domaine'::all());})->name('dashboard');

Auth::routes();


