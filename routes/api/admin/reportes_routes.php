<?php

use App\Http\Controllers\API\Admin\ReporteController;
use Illuminate\Support\Facades\Route;

Route::get('/{empresa}/{inicio}/{fin}', [ReporteController::class, 'general'])
    ->name('general');

Route::post('/ventas', [ReporteController::class, 'ventas'])
    ->name('ventas');
