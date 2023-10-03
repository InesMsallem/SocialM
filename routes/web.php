<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;
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
Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/time-line', function () {
    return view('time-line');
});
Route::get('/', function(){ return view('login');})->name('login');

Route::get('/home', function(){ return view('home');})->name('home');
Route::get('/signup', function(){ return view('signup');})->name('signup');
Route::get('/dashboard', function(){ return view('dashboard');});
Route::get('/dashboard/events/add', function(){ return view('events/add');})->name('addEvent');
Route::get('/dashboard/events', function(){ return view('events/event');});

