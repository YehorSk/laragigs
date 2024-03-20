<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Common Resource Routes:
//  index - Show all listings
//  show - Show single listing
//  create - Show form to create new listing
//  store - Store new listing
//  edit - Show form to edit listing
//  update - Update listing
//  destroy - Delete listing


Route::get('/', [ListingController::class,'index']);

Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');

Route::post('/listings',[ListingController::class,'store'])->middleware('auth');

Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'])->middleware('auth');

Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');

Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth');

Route::get('/listings/{listing}',[ListingController::class,'show'])->middleware('guest');

Route::get('/register',[UserController::class,'create'])->middleware('guest');

Route::post('/users',[UserController::class,'store']);

Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate',[UserController::class,'authenticate']);


