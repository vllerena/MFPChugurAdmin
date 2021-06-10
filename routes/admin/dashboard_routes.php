<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::name('dashboard.')->prefix('/dashboard')->middleware('auth')->group(function (){
    Route::get('/index', [DashboardController::class, 'index'])->name('index');
});
