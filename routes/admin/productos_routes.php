<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductosController;

Route::name('producto.')->prefix('/producto')->middleware('auth')->group(function (){
    Route::get('/index', [ProductosController::class, 'index'])->name('index');
});
