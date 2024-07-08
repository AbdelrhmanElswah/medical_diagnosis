<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
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
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Website\DashboardController;
use App\Http\Controllers\Website\Edit_ProfileController;
use App\Http\Controllers\Website\ContactSubmissionController;

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

// Auth routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'register']);

// Public routes
Route::get('/', [HomeController::class, 'showHome'])->name('home');
Route::post('/submit-review', [HomeController::class, 'submitReview'])->name('submit.review');
Route::resource('result', ResultController::class);
Route::resource('service', ServiceController::class);
Route::get('/upload/brain', [UploadController::class, 'showForm'])->name('upload.brain')->defaults('type', 'brain');
Route::get('/upload/chest', [UploadController::class, 'showForm'])->name('upload.chest')->defaults('type', 'chest');
Route::get('/upload/eye', [UploadController::class, 'showForm'])->name('upload.eye')->defaults('type', 'eye');
Route::post('/diagnosis/brain', [BrainController::class, 'predictBrain'])->name('predict.brain');
Route::post('/diagnosis/chest', [ChestController::class, 'predictChest'])->name('predict.chest');
Route::post('/diagnosis/eye', [EyeController::class, 'predictEye'])->name('predict.eye');

// Profile routes (requires authentication)
Route::middleware('auth')->group(function () {
    Route::get('/edit-profile', [Edit_ProfileController::class, 'showEdit'])->name('edit.profile');
    Route::post('/edit-profile', [Edit_ProfileController::class, 'update'])->name('profile.update');
    Route::post('/update-profile-picture', [Edit_ProfileController::class, 'updateProfilePicture'])->name('update.profile.picture');
    Route::get('/security', [Edit_ProfileController::class, 'showSecurity'])->name('security');
    Route::post('/profile/change-password', [Edit_ProfileController::class, 'changePassword'])->name('profile.changePassword');
    Route::post('/profile/delete-account', [Edit_ProfileController::class, 'deleteAccount'])->name('profile.deleteAccount');
    Route::get('/dashboard', [DashboardController::class, 'showDash'])->name('dashboard');
    Route::get('/history', [DashboardController::class, 'history'])->name('history');
    Route::get('/contact-us', [DashboardController::class, 'showContact'])->name('contact-us');
    Route::post('/contact-us', [ContactSubmissionController::class, 'store'])->name('contact.store');
});

// Cities route
Route::get('/cities', [ResultController::class, 'getCities']);
