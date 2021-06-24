<?php

use Illuminate\Support\Facades\Route;

Route::name("admin.")->prefix("/admin")->group(function () {
    $routesPath = "routes/api/admin";
    Route::prefix("/empresas")->name("empresas.")
        ->group(base_path("{$routesPath}/empresas_routes.php"));
    Route::prefix("/sucursales")->name("sucursales.")
        ->group(base_path("{$routesPath}/sucursales_routes.php"));
    Route::prefix("/empleados")->name("empleados.")
        ->group(base_path("{$routesPath}/empleados_routes.php"));
    Route::prefix("/productos")->name("productos.")
        ->group(base_path("{$routesPath}/productos_routes.php"));
    Route::prefix("/facturacion")->name("facturacion.")
        ->group(base_path("{$routesPath}/facturacion_routes.php"));
    Route::prefix("/reportes")->name("reportes.")
        ->group(base_path("{$routesPath}/reportes_routes.php"));
});

