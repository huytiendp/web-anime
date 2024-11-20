<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AuthMiddleware;

Route::get('/', function () {
    return view('page/main');
});
Route::get('/product', function () {
    return view('page/product');
});
// Route::get('index', [AuthController::class, 'index'])->name('auth.login');
Route::get('index', [AuthController::class, 'index'])->name('auth.index');

Route::post('dologin', [AuthController::class, 'login'])->name('auth.dologin');
Route::get('dashboard', [DashboardController::class, 'index'])->name('auth.dashboard')->middleware(AuthMiddleware::class);
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::post('doregister', [AuthController::class, 'doregister'])->name('auth.doregister');