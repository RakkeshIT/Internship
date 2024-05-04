<?php

use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.login');
})->middleware('guest');

//registration
Route::view('register', 'pages.register')->middleware('guest');
Route::post('store', [registerController::class, 'store']);
//home
Route::view('home', 'home')->middleware('auth');
Route::post('authentication', [loginController::class, 'authentication']);

Route::get('logout', [loginController::class, 'logout']);