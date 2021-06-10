<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::prefix('/auth')->name('auth.')->group(base_path('routes/auth/routes.php'));
Route::prefix('/admin')->name('admin.')->group(base_path('routes/admin/routes.php'));
