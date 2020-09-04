<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {return view('frontend.about');})->name('about');
Route::resource('evenement' , 'EventController');
Route::get('/events', function () {return view('frontend.events');})->name('events');
Route::get('/home', 'HomeController@index')->name('home');



Route::resource('user' , 'MyUserController');
Route::resource('domaine' , 'DomaineController');



Route::get('/admin/revoke/' , 'MyUserController@revoke');
Route::get('/admin/make/' , 'MyUserController@make');

Auth::routes();


