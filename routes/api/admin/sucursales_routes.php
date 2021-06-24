<?php

use App\Http\Controllers\API\Admin\SucursalController;
use Illuminate\Support\Facades\Route;

Route::get('', [SucursalController::class, 'listar'])
    ->name('listar');

Route::get('/empresa/{empresa}', [SucursalController::class, 'listarPorEmpresa'])
    ->name('listarporempresa');
