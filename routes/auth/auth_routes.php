<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthenticatedSessionController::class, 'view'])->name('view');
Route::post('/login', [AuthenticatedSessionController::class, 'login'])->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->middleware('auth')->name('logout');
