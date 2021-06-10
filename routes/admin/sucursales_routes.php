<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SucursalController;

Route::name('sucursal.')->prefix('/sucursal')->middleware('auth')->group(function (){
    Route::get('/index', [SucursalController::class, 'index'])->name('index');
    Route::get('/create', [SucursalController::class, 'create'])->name('create');
    Route::post('/store', [SucursalController::class, 'store'])->name('store');
    Route::get('/edit/{sucursal}', [SucursalController::class, 'edit'])->name('edit');
    Route::patch('/update/{sucursal}', [SucursalController::class, 'update'])->name('update');
    Route::delete('/destroy/{sucursal}', [SucursalController::class, 'destroy'])->name('destroy');
});
