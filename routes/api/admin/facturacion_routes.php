<?php

use App\Http\Controllers\API\Admin\FacturacionController;
use Illuminate\Support\Facades\Route;

Route::get('/{sucursal}/{date}', [FacturacionController::class, 'listar'])
    ->name('listar');
