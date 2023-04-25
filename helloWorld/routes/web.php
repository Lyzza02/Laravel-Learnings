<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// (7) Common Resource Routes:
// > index - show all listings
// > show - show single listing
// > create - show form to create new listing
// > store - Store new Listing
// > edit - show form to edit listing
// > update - update listing
// > destroy - delete listing


// All listings
Route::get('/', [ListingController::class, 'index']);

// Show create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing 
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

// Manage Listing 
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing 
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new User
Route::post('/users', [UserController::class, 'store']);

// User logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);