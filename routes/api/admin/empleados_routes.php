<?php

use App\Http\Controllers\API\Admin\EmpleadosController;
use Illuminate\Support\Facades\Route;

Route::get('/{sucursal}', [EmpleadosController::class, 'listar'])
    ->name('listar');
