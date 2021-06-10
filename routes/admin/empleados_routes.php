<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EmpleadoController;

Route::name('empleado.')->prefix('/empleado')->middleware('auth')->group(function (){
    Route::get('/index', [EmpleadoController::class, 'index'])->name('index');
});
