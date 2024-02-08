<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [AuthController::class,'showForm'])
    ->name('loginForm')->middleware('throttle:10,1');
Route::post('/login', [AuthController::class,'login'])->name('login');

Route::get('/register', [RegisterController::class,'showForm'])
    ->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    Route::get('/homeUser', function () {
        if (auth()->check()) {
            return view('user.home');
        } else {
            return redirect()->route('login');
        }
    })->name('home');
});
