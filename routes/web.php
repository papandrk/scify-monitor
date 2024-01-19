<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;

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

// Home Page
Route::get('/', function () {
    if (auth()->user()) {
        return redirect('/activity');
    } else {
        return redirect('/login');
    }
});

// Show All Records
Route::get('/activity', [RecordController::class, 'index'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log User In
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Catch-All
Route::fallback(function () {
    abort(404);
});
