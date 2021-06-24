<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FacturacionController;

Route::name('facturacion.')->prefix('/facturacion')->middleware('auth')->group(function (){
    Route::get('/index', [FacturacionController::class, 'index'])->name('index');
});
