<?php

use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Auth::routes();

Route::get('home', function(){
    return redirect('/');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chat', function() {
    return view('chat');
})->middleware('auth');

Route::get('/getUserLogin', function() {
	return Auth::user();
})->middleware('auth');

Route::get('/messages', function() {
    return App\Models\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function() {
    $user = Auth::user();

    $message = new App\Models\Message();
    $message->message = request()->get('message', '');
    $message->user_id = $user->id;
    $message->save();

    broadcast(new App\Events\MessagePosted($message, $user))->toOthers();
    return ['message' => $message->load('user')];
})->middleware('auth');

// Auth::routes();

// Route::get('/', 'AppController@index')->middleware('auth');

// Route::get('/messages', 'MessageController@index')->middleware('auth');

// Route::post('/messages', 'MessageController@store')->middleware('auth');

// Route::get('/{any}', 'AppController@index')->where('any', '.*')->middleware('auth'); // catch all routes or else it will return 404 with Vue router in history mode