<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OAuthController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ResultController;
use App\Http\Controllers\Website\ServiceController;
use App\Http\Controllers\Website\BrainController;
use App\Http\Controllers\Website\ChestController;
use App\Http\Controllers\Website\EyeController;
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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'register']);



Route::resource('/', HomeController::class);


Route::resource('result', ResultController::class);


Route::resource('service', ServiceController::class);


Route::get('/uploadBrain', [BrainController::class, 'showBrainForm'])->name('uploadBrain');
Route::get('/uploadChest', [ChestController::class, 'showChestForm'])->name('uploadChest');
Route::get('/uploadEye', [EyeController::class, 'showEyeForm'])->name('uploadEye');











