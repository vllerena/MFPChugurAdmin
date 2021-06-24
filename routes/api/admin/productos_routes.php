<?php

use App\Http\Controllers\API\Admin\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/{sucursal}', [ProductosController::class, 'listar'])
    ->name('listar');
