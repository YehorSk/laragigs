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

Route::get('/listings/create',[ListingController::class,'create']);

Route::post('/listings',[ListingController::class,'store']);

Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);

Route::put('/listings/{listing}',[ListingController::class,'update']);

Route::delete('/listings/{listing}',[ListingController::class,'destroy']);

Route::get('/listings/{listing}',[ListingController::class,'show']);

Route::get('/register',[UserController::class,'create']);

Route::post('/users',[UserController::class,'store']);

Route::post('/logout',[UserController::class,'logout']);

