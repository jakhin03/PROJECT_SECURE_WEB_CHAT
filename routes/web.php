<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Events\MessageSent;

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

Route::get('chat', function(){
    return view('chat');
});

Route::post('message', function(Request $request){
    broadcast(new MessageSent(auth()->user(), $request->input('message')));
    return $request->input('message');
});
