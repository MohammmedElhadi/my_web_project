<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {return view('welcome');})->name('welcome');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {return view('frontend.about');})->name('about');

Route::get('/events', function () {return view('frontend.events.index')->with('events',Event::paginate(5));})->name('events');


