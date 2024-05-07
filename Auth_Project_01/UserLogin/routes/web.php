<?php
use App\Http\Controllers\auth\bookinseats;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.login');
})->name('login');
//registration
Route::view('register', 'pages.register');
Route::post('store', [registerController::class, 'store']);
//home
Route::view('home', 'home')->middleware('auth')->middleware('auth');
Route::post('authentication', [loginController::class, 'authentication']);
Route::get('logout', [loginController::class, 'logout']);
// booking
Route::any('booking', [bookinseats::class, 'booking'])->name('booking');