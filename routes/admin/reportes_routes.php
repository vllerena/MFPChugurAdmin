<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ReporteController;

Route::name('reporte.')->prefix('/reporte')->middleware('auth')->group(function (){
    Route::get('/general', [ReporteController::class, 'general'])->name('general');
    Route::get('/ventas', [ReporteController::class, 'ventas'])->name('ventas');
});
