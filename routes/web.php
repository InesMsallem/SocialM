<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landingController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();
Route::get('/inbox', function () {return view('inbox');});
Route::get('/time-line', function () {return view('time-line');});
Route::get('/', function () {return view('login');})->name('signin');
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/signup', function () {return view('signup');})->name('signup');
Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

//Events ==>
//add event routes
Route::get('/dashboard/events/add', [EventController::class, 'create'])->name('addEvent');
Route::post('/events', [EventController::class, 'store'])->name('addEventPost');
//edit event routes
Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('editEvent');
Route::put('events/{event}', [EventController::class, 'update'])->name('editEventPut');
//display event 
Route::get('/dashboard/events', [EventController::class, 'index'])->name('showEvent');
//delete event
Route::delete('dashboard/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

//Groups ==>
//add group routes
Route::get('/dashboard/groups/add', [GroupController::class, 'create'])->name('addGroup');
Route::post('/groups', [GroupController::class, 'store'])->name('addGroupPost');
//edit group routes
Route::get('groups/{group}/edit', [GroupController::class, 'edit'])->name('editGroup');
Route::put('groups/{group}', [GroupController::class, 'update'])->name('editGroupPut');
//display group 
Route::get('/dashboard/groups', [GroupController::class, 'index'])->name('showGroup');
//delete group
Route::delete('dashboard/groups/{group}', [GroupController::class, 'destroy'])->name('groups.destroy');


//Comment ==>
// Route to display the comment creation form
Route::get('/dashboard/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/dashboard/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/dashboard/comments', [CommentController::class, 'index'])->name('comments.index');
Route::delete('/dashboard/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::get('/dashboard/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/dashboard/comments/{id}', [CommentController::class, 'update'])->name('comments.update');


// Pages
Route::get('/dashboard/pages', [PageController::class, 'index'])->name('pages.index');
Route::get('/dashboard/pages/add', [PageController::class, 'create'])->name('pages.create');
Route::post('/dashboard/pages', [PageController::class, 'store'])->name('pages.store');
Route::get('/dashboard/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
Route::put('/dashboard/pages/{page}', [PageController::class, 'update'])->name('pages.update');
Route::delete('/dashboard/pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');





// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::resource('posts', PostController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::resource('posts', PostController::class);


Route::get('/home', [HomeController::class, 'index'])->name('home');

