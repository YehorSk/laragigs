<?php

use App\Http\Controllers\ListingController;
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

Route::get('/listings/{listing}',[ListingController::class,'show']);

