<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EmpresaController;

Route::name('empresa.')->prefix('/empresa')->middleware('auth')->group(function (){
    Route::get('/index', [EmpresaController::class, 'index'])->name('index');
    Route::get('/create', [EmpresaController::class, 'create'])->name('create');
    Route::post('/store', [EmpresaController::class, 'store'])->name('store');
    Route::get('/edit/{empresa}', [EmpresaController::class, 'edit'])->name('edit');
    Route::patch('/update/{empresa}', [EmpresaController::class, 'update'])->name('update');
    Route::delete('/destroy/{empresa}', [EmpresaController::class, 'destroy'])->name('destroy');
});
