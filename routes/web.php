<?php
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard routes
Route::get('/student', function () {
    return view('student');
})->name('student.dashboard');

Route::get('/mentor', function () {
    return view('mentor');
})->name('mentor.dashboard');
