<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landingController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\EventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/profile', function () {
    return view('time-line');
})->name('profile');
Route::get('/inbox', function () {
    return view('inbox');
});

Route::get('/', function () {
    return view('login');
})->name('signin');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Events ==>
//add event routes
Route::get('/dashboard/events/add', [EventController::class, 'create'])->name('addEvent');
Route::post('/events', [EventController::class, 'store'])->name('addEventPost');
//edit event routes
Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('editEvent');
Route::put('/events/{id}',  [EventController::class, 'update'])->name('editEventPut');
//display event 
Route::get('/dashboard/events', [EventController::class, 'index'])->name('showEvent');
//delete event
Route::delete('dashboard/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
//display event frontOffice
Route::get('/home/events', [EventController::class, 'displayEvents'])->name('events');
//participate
Route::post('/home/events/{event}/participate', [EventController::class, 'participateInEvent'])->name('eventParticipate');
//event reviews 
Route::post('/home/events/{event}/reviews', [EventController::class, 'addReview'])->name('addReview');




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

//Category ==>
// Route to display the comment creation form
Route::get('/dashboard/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/dashboard/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/dashboard/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/dashboard/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/dashboard/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');


//Category ==>
// Route to display the comment creation form
Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/dashboard/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/dashboard/products', [ProductController::class, 'index'])->name('products.index');
Route::delete('/dashboard/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/dashboard/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/dashboard/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/home/products', [ProductController::class, 'displayProducts'])->name('products');










Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/posts', PostController::class);


Route::get('/home', [HomeController::class, 'index'])->name('home');
