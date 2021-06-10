<?php

use App\Http\Controllers\API\Admin\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::get('', [EmpresaController::class, 'listar'])
    ->name('listar');
