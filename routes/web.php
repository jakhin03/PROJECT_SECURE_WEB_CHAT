<?php

use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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
// Route::get('chat', function(){
//     return view('chat');
// });

// Route::post('message', function(Request $request){
//     broadcast(new MessageSent(auth()->user(), $request->input('message')));
//     return $request->input('message');
// });

// Route::get('login/{id}', function($id){
//     Auth::loginUsingId($id);

//     return back();
// });

// Route::get('logout', function(){
//     Auth::logout();

//     return back();
// });
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