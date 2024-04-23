<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OAuthController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ResultController;
use App\Http\Controllers\Website\ServiceController;
use App\Http\Controllers\Website\UploadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;



/*
|--------------------------------------------------------------------------
| web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration routes
Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'register']);



Route::resource('/', HomeController::class);
Route::resource('result', ResultController::class);
Route::resource('service', ServiceController::class);
Route::resource('upload', UploadController::class);



