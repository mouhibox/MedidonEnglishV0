<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Ads (aka Donations)
Route::get('/ads/create', [AdController::class, 'create'])->name('ads.create');
Route::post('/ads', [AdController::class, 'store'])->name('ads.store');
Route::get('/ads', [AdController::class, 'index'])->name('ads.index');

// Donations alias (same controller)
Route::get('/donations', [AdController::class, 'index'])->name('donations.index');

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Test email route
Route::get('/mail', function () {
    $toEmail = 'destinataire@example.com';
    Mail::raw('Ceci est un email de test envoyé directement depuis une route Laravel.', function ($message) use ($toEmail) {
        $message->to($toEmail)
            ->subject('Email Test Direct');
    });
    return 'Email envoyé !';
});

// Authentication
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Password Reset
Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

// Authenticated user profile routes
Route::middleware('auth')->group(function () {
    Route::get('/account', [AuthController::class, 'showProfile'])->name('account.show');
    Route::get('/account/edit', [AuthController::class, 'editProfile'])->name('account.edit');
    Route::post('/account/update', [AuthController::class, 'updateProfile'])->name('account.update');
    Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('password.update');
});
