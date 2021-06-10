<?php

use Illuminate\Support\Facades\Route;

Route::name("admin.")->prefix("/admin")->group(function () {
    $routesPath = "routes/api/admin";
    Route::prefix("/empresas")->name("empresas.")
        ->group(base_path("{$routesPath}/empresas_routes.php"));
});

