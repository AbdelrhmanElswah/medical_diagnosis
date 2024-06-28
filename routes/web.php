<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OAuthController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ResultController;
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\Website\ServiceController;
use App\Http\Controllers\Website\BrainController;
use App\Http\Controllers\Website\ChestController;
use App\Http\Controllers\Website\EyeController;
use App\Http\Controllers\Website\UploadController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;



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
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'register']);

Route::get('/user', [UserController::class, 'showUser'])->name('user');


Route::get('/', [HomeController::class, 'showHome'])->name('home');



Route::resource('result', ResultController::class);


Route::resource('service', ServiceController::class);

Route::get('/upload/brain', [UploadController::class, 'showForm'])->name('upload.brain')->defaults('type', 'brain');
Route::get('/upload/chest', [UploadController::class, 'showForm'])->name('upload.chest')->defaults('type', 'chest');
Route::get('/upload/eye', [UploadController::class, 'showForm'])->name('upload.eye')->defaults('type', 'eye');


Route::post('/diagnosis/brain', [BrainController::class, 'predictBrain'])->name('predict.brain');


Route::post('/diagnosis/chest', [ChestController::class, 'predictChest'])->name('predict.chest');



Route::post('/diagnosis/eye', [EyeController::class, 'predictEye'])->name('predict.eye');












