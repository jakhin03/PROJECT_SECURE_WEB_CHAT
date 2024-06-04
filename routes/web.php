<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->can('viewDashboard')->name('dashboard');

Route::get('/check-session', function () {
    return response()->json([
        'active' => Auth::check()
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [App\Http\Controllers\AppController::class, 'index'])->middleware('auth');

Route::get('/messages', [App\Http\Controllers\MessageController::class, 'index'])->middleware('auth');

Route::post('/messages', [App\Http\Controllers\MessageController::class, 'store'])->middleware('auth');

Route::post('/reactions', [App\Http\Controllers\MessageController::class, 'react'])->middleware('auth');

// Route::get('/{any}', function () {
//     return view('dashboard');
// })->where('any', '.*')->middleware(['auth', 'verified']); // catch all routes or else it will return 404 with Vue router in history mode

Route::get('/{any}', [App\Http\Controllers\AppController::class, 'index'])->where('any', '.*')->middleware('auth'); // catch all routes or else it will return 404 with Vue router in history mode