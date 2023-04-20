<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return response('<h1>Hello World</h1>', 200)
        -> header('Content-Type', 'text/plain')
        -> header('foo', 'bar');
});

// wildcard with contraint that will accept only numbers
// to accept only number, will use regular expression
// ddd -> die dump and debug while dd -> die and dump
Route::get('/posts/{id}', function($id){
    return response('Post '.$id);
})-> where('id', '[0-9]+');

// Request and Query Params
Route::get('/search', function(Request $request){
    return ($request->name.' '.$request->city);
});